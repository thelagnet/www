<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text upload</title>
</head>
<body>
<form enctype="multipart/form-data" name="form" action="" method="POST">
<input type="text" name="title" id="title" value="title">
  <input type="text" name="subject" id="subject" value="your things">
  <input type="submit" value="Upload" />
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$myfile = fopen($_POST['title']. ".txt", "w") or die("Unable to open file!");

$target_dir = "./";
$target_file = ($target_dir . $_POST['title'] . ".txt");


    fwrite($myfile, $_POST['subject']);
fclose($myfile);
    echo "The file $filename has been uploaded i think you can see it at http://upload.com/". $_POST['title']. ".txt";

}

?> 