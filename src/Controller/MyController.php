<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Messenger\MessageBusInterface;
use App\Message\MyMessage;
use Symfony\Component\HttpFoundation\Response;

class MyController
{
    public function sendMessage(MessageBusInterface $bus)
    {
        $bus->dispatch(new MyMessage('Hola, RabbitMQ!'));

        return new Response('Mensaje enviado a RabbitMQ.');
    }
}
