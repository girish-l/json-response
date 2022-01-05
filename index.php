<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Response\JsonResponse;

new JsonResponse('ok', 'this is the message', ['a' => 'what the hell']);
