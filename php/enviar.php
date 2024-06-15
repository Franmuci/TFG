<?php

use Mailtrap\Config;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Mailtrap\EmailHeader\CategoryHeader;

require __DIR__ . '\..\vendor\autoload.php';

$apiKey = '297f7c7c69ea0c1034b4bcf81649226e';
$mailtrap = new MailtrapClient(new Config($apiKey));

$email = (new Email())
    ->from(new Address('mailtrap@demomailtrap.com', 'FranPag'))
    ->to(new Address("franloko70@gmail.com"))
    ->subject('Mensaje de '.$_POST['nombre'])
    ->text($_POST['mensaje'].'

Correo del cliente: '. $_POST['email'].'
Nombre del cliente: '. $_POST['nombre'])
;

$email->getHeaders()
    ->add(new CategoryHeader('Integration Test'))
;

$response = $mailtrap->sending()->emails()->send($email);

var_dump(ResponseHelper::toArray($response));