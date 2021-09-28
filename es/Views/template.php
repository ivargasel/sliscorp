<?php
include 'Views/parts/head.php';
?>

<main class="row">
    <?php
    require_once "Models/templateModel.php";
    require_once "Controllers/templateController.php";

    $template = new templateControllerClass();
    $template->linktemplateController();
    ?>
</main>

<?php
include 'Views/parts/foot.php';
?>