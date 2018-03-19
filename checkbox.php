<?php

function _checked($a, $b) {
    return ($a === $b) ? ' checked ' : '';
}

function _checkedMultiple($val, $array) {
    if (is_array($array)) {
        return (in_array($val, $array)) ? ' checked ' : '';
    }
}

$breakfast = ['', 'Ei', 'Bratwurst', 'Cornflakes', 'Kaviar'];
//filter_input
$selection = filter_input(INPUT_GET, 'selection', FILTER_VALIDATE_INT, FILTER_REQUIRE_ARRAY);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 CHECKBOX</title>
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
                    <legend>Frühstück</legend>

                    <!--Schleife-->
                    <?php for ($i = 1; $i < count($breakfast); $i++) : ?>
                        <div class="form-check form-check-inline">
                            <input <?= _checkedMultiple($i, $selection) ?> 
                                class="form-check-input" type="checkbox" 
                                name="selection[]" value="<?= $i ?>" id="selection<?= $i ?>">

                            <label class="form-check-label" for="selection<?= $i ?>">
                                <?= $breakfast[$i] ?>
                            </label>
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
            var_dump($selection);
            ?>
        </pre>
    </body>
</html>
