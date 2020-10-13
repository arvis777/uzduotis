<?php date_default_timezone_set('Europe/Vilnius'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lydes ir <?php print date('Y-m-d', strtotime('+1 day')) . '!'; ?></title>
</head>
    <body>
        <h1>
            <b>Arvydas</b> - PHP su manim buvo ir
            <?php print date('H', strtotime('-1 hour')) . ' valanda'; ?>
        </h1>
        <p>
            <?php print date('Y', strtotime('+1 year')) . ' ne uz kalnu!'; ?>
        </p>
    </body>
</html>
