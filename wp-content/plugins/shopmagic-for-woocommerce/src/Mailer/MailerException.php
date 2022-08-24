<?php
declare( strict_types=1 );

namespace WPDesk\ShopMagic\Mailer;

use WPDesk\ShopMagic\Exception\ShopMagicException;

class MailerException extends \RuntimeException implements ShopMagicException {}
