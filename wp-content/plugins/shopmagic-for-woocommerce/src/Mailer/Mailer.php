<?php
declare( strict_types=1 );

namespace WPDesk\ShopMagic\Mailer;

/**
 * Object-oriented wp_mail wrapper.
 */
class Mailer {

	/** @var \WP_Error|null */
	private $error;

	/** @return void */
	public function send( Email $message ) {
		add_filter(
			'wp_mail_from',
			$from_cb = static function() use ( $message ) {
				return $message->from;
			}
		);
		add_filter(
			'wp_mail_from_name',
			$from_name_cb = static function() use ( $message ) {
				return $message->from_name;
			}
		);
		add_action( 'wp_mail_failed', [ $this, 'catch_error' ] );

		try {
			$result = wp_mail(
				$message->to,
				$message->subject,
				$message->message,
				$message->get_headers(),
				$message->attachments
			);
			if ( ! $result ) {
				if ( $this->error instanceof \WP_Error ) {
					throw new MailerException(
						$this->error->get_error_message(),
						(int) $this->error->get_error_code()
					);
				} else {
					throw new MailerException( 'WordPress did not send the mail but unfortunately no reason was given' );
				}
			}
		} finally {
			remove_action( 'wp_mail_failed', [ $this, 'catch_error' ] );
			remove_filter( 'wp_mail_from', $from_cb );
			remove_filter( 'wp_mail_from_name', $from_name_cb );
		}
	}

	/** @return void */
	public function catch_error( \WP_Error $error ) {
		$this->error = $error;
	}
}
