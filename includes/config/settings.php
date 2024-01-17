<?php
//Define DB credentials
const DB_HOST = 'localhost';
const DB_USER = 'prj_2023_2024_ressys_t19';
const DB_PASS = 'eiceekee';
const DB_NAME = 'prj_2023_2024_ressys_t19';

//Paths
const BASE_PATH = '/2023_2024/ressys_t19/';
const LOG_PATH = __DIR__ . '/../logs/';
const INCLUDES_PATH = __DIR__ . '/../';

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function (int $severity, string $message, string $file, int $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});
