<?php

$title = 'shopping';
ob_start();

?>
<div>
    <h1>PAGE SHOPPING</h1>

    <?php require_once __DIR__ . '/../partials/show_error.php'; ?>

    <p>Bienvenue</p>

</div>



<?php
$page_content = ob_get_clean();