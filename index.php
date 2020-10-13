<?php date_default_timezone_set('Europe/Vilnius'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>As <?php print date('l') . ' ir PHP'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <h1>
            <b>Arvydas</b> - HTML <?php print 'ir PHP'; ?> asas jau nuo <?php print date('Y') . ' metu' ?>
        </h1>
        <p>
            Viskas prasidejo<br/>
            <?php print date('m') . ' menesio, ' . date('d') . ' diena!'; ?>
        </p>
    </body>
</html>

