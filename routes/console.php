<?php

use Illuminate\Support\Facades\Schedule;
use Spatie\NotificationLog\Models\NotificationLogItem;

Schedule::command('model:prune', [
    '--model' => [
        NotificationLogItem::class,
    ],
])->daily();
