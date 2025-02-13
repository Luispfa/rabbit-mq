<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\MyMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class MyMessageHandler
{
    public function __invoke(MyMessage $message)
    {
        echo "Mensaje recibido: " . $message->getContent();
    }
}
