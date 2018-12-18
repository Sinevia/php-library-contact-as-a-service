# PHP Library. Contact-as-a-Service

A PHP library to provide contact-as-a-service. Contact form requests are sent to the sender's email address to be verified prior to sending to the final recipient.

## Usage ##

```php
$response = Sinevia\ContactAsAService::send([
   'From' => 'from@test.com',
   'To' => 'to@test.com',
   'Cc' => 'cc@test.com',
   'Bcc' => 'bcc@test.com',
   'Text' => 'Text',
   'Html' => 'Html',
   'Subject' => 'Subject',
   'Origin' => 'Name of Contact Form',
]);

if ($response['status'] == "success") {
    $message = 'Your request was successfully received. Before we process it further, check your email and click the confirmation link we have sent to you!';
} else {
    $message = 'Your request failed to be send. Please try again later!';
}
```
