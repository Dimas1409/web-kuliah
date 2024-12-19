<?php

return [
    'paths' => ['api/*', 'storage/*'], // Pastikan path untuk API sudah disebutkan
    'allowed_methods' => ['GET, PUT, POST, DELETE'], // Semua metode HTTP diizinkan
    'allowed_origins' => ['*'], // Sesuaikan dengan URL frontend Anda
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Semua header diizinkan
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Atur `true` jika menggunakan cookie/auth
];
