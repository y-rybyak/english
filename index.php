<?php
require 'vendor/autoload.php';
define('ROOT', __DIR__);

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)
    ->setUsername('entestrobomail@gmail.com')
    ->setPassword('6710omne8864padmehuM')
    ->setEncryption('ssl');
$mailer = Swift_Mailer::newInstance($transport);
$app = new \Slim\Slim;

$app->config([
    'debug' => false,
    'templates.path', 'templates',
]);

$app->get('/', function () use ($app) {
    $app->render('test.php');
});

$app->post('/', function () use ($app, $mailer) {

    $request = $app->request();
    $body = $request->getBody();
    $answers = explode("&", $body);
    $app->render('test.php', ["answers" => $answers]);

    $resultEmail = $app->view->fetch('email/test.php');
    $message = Swift_Message::newInstance('Результат тестирования')
        ->setFrom('entestrobomail@gmail.com')
        ->setTo(['teacher01@gmail.com', 'teacher02@miritec.com'])
        ->setBody($resultEmail)
        ->setContentType("text/html");
    $mailer->send($message);
});

$app->run();
