<?php

namespace NW\WebService\References\Operations\Notification;

class MessagesClient
{
    public static function sendMessage(array $messages, $resellerId, $clientId, $status, $to): bool
    {
        echo $messages;
        echo $resellerId;
        echo $clientId;
        echo $status;
        echo $to;
        return true;
    }
}