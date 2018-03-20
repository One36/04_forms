<?php
$message = [
    'text' => '',
    'type' => 'info'
];

if (isset($_FILES['uploadFile'])) {
    $imageTypes = ['', '.gif', '.jpeg', '.png'];
    $src = $_FILES['uploadFile']['tmp_name'];
    $imgInfo = getimagesize($src);
    $imgType = $imgInfo[2]; // 1(gif) 2(jpeg) 3(png)

    if ($imgType >= 1 && $imgType <= 3) {

        $folder = './uploads/';
        $filename = uniqid('634287', true);
        $filetype = $imageTypes[$imgType];


        $dst = $folder . $filename . $filetype;

        $message['text'] = 'Upload ';

        if (move_uploaded_file($src, $dst)) {

            $message['text'] .= 'erfolgreich';
            $message['type'] = 'success';
        } else {
            $message['text'] .= 'fehlgeschlagen';
            $message['type'] = 'danger';
        }
//        $message .= (move_uploaded_file($src, $dst)) ? 'erfolgreich' : 'fehlgeschlagen';
    } else {
        $message['text'] .= 'Falscher Dateityp';
        $message['type'] = 'danger';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 04 FILES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Dateien hochladen</legend>
                </fieldset>
                <input class="form-control-file" type="file" name="uploadFile">
                <hr>
                <fieldset>
                    <button class="btn btn-primary">Upload</button>
                    <button class="btn btn-primary" onclick="location.href = 'files.php'" 
                            type="button">Page Reload</button>
                </fieldset>
                <hr>
                <fieldset>
                    <p class="alert alert-<?php echo $message['type'] ?>"><?php echo $message['text'] ?></p>
                </fieldset>
            </form>
            <hr>

            <?php $files = glob('./uploads/*.{gif,jpg,jpeg,png}', GLOB_BRACE); ?>

            <?php //for ($i = 0; $i < count($files); $i++) :  ?>
<!-- <img src="<?php // echo $files[$i]; ?>" width="150px" height="auto"> -->
            <?php //endfor;  ?>

            <div class="row">
                <?php foreach ($files as $file) : ?>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                        <img src="<?php echo $file; ?>" class="img-fluid img-thumbnail">
                    </div>
                <?php endforeach; ?>
            </div>
            <hr>
            <div class="row">
                <?php foreach ($files as $file) : ?>
                        <img src="<?php echo $file; ?>" class="img-fluid img-thumbnail">
                <?php endforeach; ?>
            </div>
        </div>

        <pre>
            <?php
//            var_dump($files);
//      echo mime_content_type($dst);
            ?>
        </pre>
    </body>
</html>
