# SefMail API SDK

## Dependencies

* [Guzzel](http://docs.guzzlephp.org/en/stable/quickstart.html)

### Quick start guide

1. Install the SefMail package with composer: `composer require 'asss-ist/sef-mail'`
2. Require the mail route class (`Mail`) and pass your api key which you can get from [Here](https://mail.asss.ist/)
```php
require_once '../../../vendor/autoload.php';
use Asssist\SefMail\Routes\Mail;

$mail = new Mail($apiKey);
$response = $mail->send($from, $to, $subject, $content);
```