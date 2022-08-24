<?php
declare( strict_types=1 );

namespace WPDesk\ShopMagic\MarketingLists\Shortcode;

use ShopMagicVendor\WPDesk\View\Renderer\SimplePhpRenderer;
use WPDesk\ShopMagic\CommunicationList\CommunicationList;
use WPDesk\ShopMagic\Customer\Customer;
use WPDesk\ShopMagic\Helper\TemplateResolver;
use WPDesk\ShopMagic\Mailer\Email;
use WPDesk\ShopMagic\Mailer\Mailer;
use WPDesk\ShopMagic\Mailer\MailerException;

final class ConfirmationDispatcher {

	/** @var Customer */
	private $customer;

	/** @var CommunicationList */
	private $target_list;

	/** @var Mailer */
	private $mailer;

	public function __construct( Customer $customer, CommunicationList $target_list, Mailer $mailer = null ) {
		$this->customer    = $customer;
		$this->target_list = $target_list;
		$this->mailer      = $mailer ?? new Mailer();
	}

	public function dispatch_confirmation_email(): bool {
		try {
			$email = ( new Email() )
				->to( $this->customer->get_email() )
				->subject( esc_html__( 'Confirm your sign up', 'shopmagic-for-woocommerce' ) )
				->message( $this->get_message_content() );
			$this->mailer->send( $email );
			return true;
		} catch ( MailerException $e ) {
			// TODO: Don't catch exception - allow to propagate and make method void.
			return false;
		}
	}

	/** @return void */
	public function dispatch_ajax_confirmation() {
		if ( ! wp_doing_ajax() ) {
			return;
		}

		$result = $this->dispatch_confirmation_email();

		if ( ! $result ) {
			wp_send_json_error( esc_html__( 'An error occurred, while sending confirmation message. Ensure, you have entered correct email address.', 'shopmagic-for-woocommerce' ) );
		}

		wp_send_json_success( esc_html__( 'Check your messages box to confirm your sign up.', 'shopmagic-for-woocommerce' ) );
	}

	private function get_message_content(): string {
		return ( new SimplePhpRenderer( TemplateResolver::for_public( 'emails' ) ) )->render(
			'sign_up_confirmation',
			[
				'customer'          => $this->customer,
				'list_id'           => $this->target_list->get_id(),
				'list_title'        => $this->target_list->get_name(),
				'confirmation_link' => $this->get_confirmation_link(),
			]
		);
	}

	private function get_confirmation_link(): string {
		return admin_url( 'admin-post.php' ) . '?' . http_build_query(
			[
				'action'  => 'double_opt_in',
				'hash'    => md5( $this->customer->get_email() . SECURE_AUTH_SALT ),
				'id'      => $this->customer->get_id(),
				'list_id' => $this->target_list->get_id(),
			]
		);
	}
}
