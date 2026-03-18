<?php

function errorHanding($errorMessage) {
    // write log error to folder logs/log-yyyy-mm-dd.log
    $data = date('Y-m-d H:i:s') . " - $errorMessage\n";
    $filename = 'logs/error-'.date('Y-m-d') . '.log';
    file_put_contents($filename, $data, FILE_APPEND);
}

function writeLog($message) {
    // write log to folder logs/log-yyyy-mm-dd.log
    $data = date('Y-m-d H:i:s') . " - $message\n";
    $filename = 'logs/log-'.date('Y-m-d') . '.log';
    file_put_contents($filename, $data, FILE_APPEND);
}