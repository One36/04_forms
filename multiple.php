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
            <form>
                <fieldset>
                    <legend>Verpflegung</legend>
                    <div class="form check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu" id="menu1" value="">
                        <label class="form-check-label" for="menu1">Keine</label>
                    </div>
                    <div class="form check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu" id="menu2" value="">
                        <label class="form-check-label" for="menu2">Frühstück</label>
                    </div>
                    <div class="form check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu" id="menu3" value="">
                        <label class="form-check-label" for="menu3">Halbpension</label>
                    </div>
                    <div class="form check form-check-inline">
                        <input class="form-check-input" type="radio" name="menu" id="menu4" value="">
                        <label class="form-check-label" for="menu4">Vollpension</label>
                    </div>
                </fieldset>
                <hr>
                <fieldset>
                    <button class="btn btn-primary">Senden</button>
                </fieldset>
            </form>
        </div>

        <hr>

        <pre>
            <?php
//                var_dump();
            ?>
        </pre>
    </body>
</html>