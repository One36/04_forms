<?php

function multiChoice($search, $subject, $attribute) {
    if (is_array($subject)) {
        return (in_array($search, $subject)) ? $attribute : '';
    } else {
        return ($search === $subject) ? $attribute : '';
    }
}

function selectMultiple($value, $array) {
    if (is_array($array)) {
        return (in_array($value, $array)) ? ' selected ' : '';
    }
}

$airports = [
    'TXL' => 'Berlin - Tegel',
    'SXF' => 'Berlin - Schönefeld',
    'FRA' => 'Frankfurt',
    'DUS' => 'Düsseldorf'
];

$departs = filter_input(INPUT_GET, 'departs', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
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
                    <legend></legend>
                    <select name="departs[]" class="form-control" multiple>
                        <option value="">Bitte Auswählen</option>
                        <optgroup label="Deutschland">
                            <?php foreach ($airports as $key => $value) : ?>
                                <option <?php echo multiChoice($key, $departs, 'selected') ?> 
                                    value="<?php echo $key ?>"><?php echo $value; ?></option>
                                <?php endforeach; ?>
                        </optgroup>
                    </select>
                </fieldset>
                <hr>
                <fieldset>
                    <button class="btn btn-primary">Senden</button>
                    <button class="btn btn-primary" onclick="location.href = 'selectbox.php'" type="button">
                        Reload Page</button>
                </fieldset>
            </form>
        </div>
        <hr>
        <pre>
            <?php
//            var_dump($departs);
            ?>
        </pre>
    </body>
</html>