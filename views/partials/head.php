<!DOCTYPE HTML>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP -->
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com/; font-src 'self' https://fonts.gstatic.com/">
    <link rel="stylesheet" href="static/css/styles.css">
    <script src="static/js/index.js" defer></script>
</head>

<body class="bg-design <?= $bg ?> <?= $bodyLayout ?>">