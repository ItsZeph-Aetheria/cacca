<?php

return [
  'mysql' => [
    'host' => 'localhost',
    'port' => '3306',
    'username' => 'root',
    'password' => 'root',
    'db' => 'nameless',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'initialise_charset' => true,
    'initialise_collation' => true,
  ],
  'remember' => [
    'cookie_name' => 'nl2',
    'cookie_expiry' => 2629800,
  ],
  'session' => [
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ],
  'core' => [
    'hostname' => 'localhost',
    'path' => '',
    'friendly' => false,
    'force_https' => false,
    'force_www' => false,
    'captcha' => false,
    'date_format' => 'd M Y, H:i',
    'trustedProxies' => NULL,
    'installed' => true,
  ],
  'email' => [
    'email' => 'support@aetheriasmp.net',
    'username' => 'lagnatomas4@gmail.com',
    'password' => 'xsmtpsib-9eb8760417102758cf3b48e5b18e8afd5956739bc9c27e828ad1055811c2a4a7-LVxvKn2LUEmhmdcw',
    'name' => 'AetheriaSMP support e-mail',
    'host' => 'smtp-relay.brevo.com',
    'port' => 587,
  ],
];