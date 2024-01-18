<?php

require_once __DIR__ . '/../src/init.php';

$page = 'home';

if (isset($_GET['p'])) {
    if (in_array($_GET['p'], $existing_pages)) {
        $page = $_GET['p'];
    } else {
        $page = '404';
    }
}
require_once __DIR__ . '/../src/views/partials/navbar.php';
require_once __DIR__ . '/../src/views/partials/footer.php';
require_once __DIR__ . '/../src/views/pages/'. $page .'.php';?>
<link rel="stylesheet" href="/assets/css/register.css"><?php
require_once __DIR__ . '/../src/views/template.php';