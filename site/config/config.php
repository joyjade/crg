<?php

return [
    'debug' => true,
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'localhost',
            'port' => 1025,
            'security' => false
        ]
    ]
    // 'url' => 'http://e50c4148.ngrok.io'
];

// 'type' => 'smtp',
// 'host' => 'smtp.gmail.com',
// 'port' => 587, or 465?,
// 'security' => true,
// 'auth' => true,
// 'username' => 'jadeandpearls',
// 'password' => 'captured4.ever'

// 2-step verification on gmail?
// You'll need to create an "App Password": 16-digit passcode
// Generate one with Google
