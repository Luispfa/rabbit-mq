<?php

declare(strict_types=1);

namespace App\Controller;

use App\Message\MyMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Messenger\MessageBusInterface;

class MyController extends AbstractController
{
    #[Route('/send-message', name: 'send_message')]
    public function sendMessage(MessageBusInterface $bus): JsonResponse
    {
        $message = new MyMessage('Hello RabbitMQ');
        $bus->dispatch($message);

        return new JsonResponse(['message' => 'Message sent successfully!']);
    }
}
