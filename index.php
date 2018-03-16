<?php

// 2. Variante - Selected = Eingaben speichern > Funktion
function _selected($a, $b) {

    return ($a === $b) ? 'selected' : '';
}

$lastname = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$airportStart = filter_input(INPUT_POST, 'airportStart', FILTER_SANITIZE_STRING);

//var_dump($airportStart);

$airports = [];
$airports[] = ['TXL', 'Berlin - Tegel'];
$airports[] = ['SXF', 'Berlin - Schönefeld'];

// Aufschlüsselung
//$airports = [0];
//$airports[0]['TXL'] = 'Berlin - Tegel';
//$airports[] = ['TXL' => 'Berlin - Tegel'];

$airportsName = [];
$airportsName['TXL'] = 'Berlin - Tegel';
$airportsName['SXF'] = 'Berlin - Schönefeld';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - 04 Forms / Formulare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h1>PHP - Formulare</h1>
            <form autocomplete="off" method="post">
                <fieldset>
                    <legend>Persönliche Daten</legend>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label for="fn">Vorname</label>
                            <!--<input class="form-control" type="text" id="fn" name="firstName" value="">-->
                            <input type="text" class="form-control" name="firstName" 
                                   value="<?php echo $firstname; ?>">
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <label for="ln">Name</label>
                            <input class="form-control" type="text" id="ln" name="lastName" 
                                   value="<?php echo $lastname; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-end">
                            <button formaction="" name="btnAction" value="update" 
                                    class="btn btn-primary" style="margin-top: 10px">Update</button>
                            <button formaction="" name="btnAction" value="insert" 
                                    class="btn btn-primary" style="margin-top: 10px">Insert</button>
                        </div>
                    </div>
                </fieldset>
                <hr>

                <!--/////// 2. Variante - Selected = Eingaben speichern >> Funktion > siehe oben ////////-->    
                <fieldset>
                    <legend>Auswahl des Flughafens</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>

<?php for ($i = 0; $i < count($airports); $i++) : ?>

                            <option <?php echo _selected($airportStart, $airports[$i][0]); ?> value="<?php echo $airports[$i][0]; ?>">
                            <?php echo $airports[$i][1]; ?></option>

<?php endfor; ?>

                    </select>
                </fieldset>

                <hr>

                <!--     /////// 1. Variante - Selected = Eingaben speichern ////////    
                <fieldset>
                    <legend>Auswahl des Flughafens</legend>
                    <select class="form-control" name="airportStart">
                        <option>Bitte Flughafen auswählen...</option>


<?php for ($i = 0; $i < count($airports); $i++) : ?>
                            

                    <?php if ($airportStart === $airports[$i][0]) : ?>
                                        <option selected value="<?php echo $airports[$i][0]; ?>">
        <?php echo $airports[$i][1]; ?></option>
                    <?php else : ?>
                                        <option value="<?php echo $airports[$i][0]; ?>">
                        <?php echo $airports[$i][1]; ?></option>
                    <?php endif; ?>
                                    
                <?php endfor; ?>

                    </select>
                </fieldset> -->

                <hr>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Vorname</td>
                            <td><?php echo $firstname; ?></td>
                        </tr>
                        <tr>
                            <td>Nachname</td>
                            <td><?php echo $lastname; ?></td>
                        </tr>
                        <tr>
                            <td>Abflughafen</td>
                            <td><?php echo $airportStart; ?></td>
                        </tr>
                    </tbody>
                </table>

            </form>
        </div>
    </body>
</html>