<?php

return [
    'apiKey' => env('COINBASE_API_KEY'),
    'apiVersion' => env('COINBASE_API_VERSION'),

    'webhookSecret' => env('615b808e-2154-40b7-8dd5-6b486358a568'),
    'webhookJobs' => [
         'charge:created' => \App\Jobs\CoinbaseWebhooks\HandleCreatedCharge::class,
        // 'charge:confirmed' => \App\Jobs\CoinbaseWebhooks\HandleConfirmedCharge::class,
        // 'charge:failed' => \App\Jobs\CoinbaseWebhooks\HandleFailedCharge::class,
        // 'charge:delayed' => \App\Jobs\CoinbaseWebhooks\HandleDelayedCharge::class,
        // 'charge:pending' => \App\Jobs\CoinbaseWebhooks\HandlePendingCharge::class,
        // 'charge:resolved' => \App\Jobs\CoinbaseWebhooks\HandleResolvedCharge::class,
    ],
    'webhookModel' => Shakurov\Coinbase\Models\CoinbaseWebhookCall::class,
];
