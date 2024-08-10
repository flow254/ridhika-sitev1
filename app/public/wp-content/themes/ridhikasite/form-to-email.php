<?php


$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $message = $_POST['message'];

    if (empty($firstName)) {
        $errors[] = 'First Name is empty';
    }
    if (empty($lastName)) {
        $errors[] = 'Last Name is empty';
    }

    if (empty($emailAddress)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'contact.ridhika@gmail.com';
        $emailSubject = 'New email from your contact form';
        $headers = ['From' => $emailAddress, 'Reply-To' => $emailAddress, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$firstName." ".$lastName}", "Email: {$emailAddress}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            $redirect_address = echo site_url('/success');
            header('Location: $redirect_address');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>




