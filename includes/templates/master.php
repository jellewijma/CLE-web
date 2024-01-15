<?php

/**
 * @var string|null $pageTitle
 * @var string|null $content
 */
?>
<!doctype html>
<html lang="en">

<head>
    <title>Web | <?= $pageTitle ?? ''; ?></title>
    <meta charset="utf-8" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- <div class="container px-4 mx-auto"> -->
    <div class="">
        <?= $content ?? ''; ?>
    </div>
</body>

</html>