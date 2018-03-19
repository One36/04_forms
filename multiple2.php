<?php

function _checked($a, $b) {
    return ($a === $b) ? ' checked ' : '';
}

//         0    1         2            3             4 
$menus = ['', 'keine', 'Frühstück', 'Halbpension', 'Vollpension'];

//filter_input
$menu = filter_input(INPUT_GET, 'menu', FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 MULTIPLE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <form>
                <fieldset>
                    <legend>Verpflegung</legend>

                    <!--Schleife-->
                    <?php for ($i = 1; $i < count($menus); $i++) : ?>
                        <div class="form-check form-check-inline">
                            <input <?= _checked($i, $menu) ?> class="form-check-input" type="radio" name="menu" value="<?= $i ?>" id="menu<?= $i ?>">
                            <label class="form-check-label" for="menu<?= $i ?>"><?= $menus[$i] ?></label>
                        </div>
                        <!--/Schleife-->
                    <?php endfor; ?>
                </fieldset>
                <hr>
                <fieldset>
                    <button class="btn btn-primary">send</button>
                </fieldset>
            </form>
        </div>
        <hr>
        <pre>
            <?php
//            var_dump();
            ?>
        </pre>
    </body>
</html>