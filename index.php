<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "Hello World"; ?>
    </title>
</head>
<body>
    <?php echo date('Y-m-d H:i:s'); ?>
</body>
</html>
<?php 

$filename = 'logs/log-'.date('Y-m-d') . '.log';
$data = date('Y-m-d H:i:s') . " - Hello, World!\n";
file_put_contents($filename, $data, FILE_APPEND);

// error log
$filename = 'logs/error-'.date('Y-m-d') . '.log';
$data = date('Y-m-d H:i:s') . " - Exception: Hello, World!\n";
file_put_contents($filename, $data, FILE_APPEND);


?>