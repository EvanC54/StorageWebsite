<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Contact Submission',
    'email_message' => 'You have a new contact submission!',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'ustorebusniess@gmail.com'
    ),
    'fields' => array(
    'email1' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>