<?php

namespace NW\WebService\References\Operations\Notification;

class Status
{
    private int $id;
    private string $name;

    public static function getName(int $id): string
    {
        $a = [
            0 => 'Completed',
            1 => 'Pending',
            2 => 'Rejected',
        ];

        return $a[$id];
    }
}