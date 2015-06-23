<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Test</title></head>
<body>
<?php include 'navbar.php' ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php include(ROOT . '/models/test.php'); ?>

        </div>
    </div>
</div>
</body>
</html>