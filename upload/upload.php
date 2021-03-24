<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
<p>JPG, JPEG, PNG, GIF, txt & zip file upload</p>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file" />
    <input type="submit" value="Upload" />
  </form>

<p>a lightweight file uploader supported formats are png, jpg, gif, jpeg, and txt i mostly use this as a Pastebin and you can too <br>
copy code make it a txt file and just upload it its not encrypted so the server can see the actual file also anyone can go to src.invaliduser.uk and>
file uploads are limited to 100MB thanks Cloudflare if you want to upload bigger files email me</p>
<p>to do:
<br>
<ul>
<li>html upload for hosting simple one-page websites</li>
<li>adding on the website hosting I will allow uploading folders with multiple files in there</li>
<li>in browser text editor to upload your file</li>
<li>accounts and editing your file (unlikely but maybe)</li>
<p>warning your file could be overwriten if someone else uploads a file with the same name also no personal things or law braking things.</p>
<br>
<br>
<br>

</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file'])) {
    $path = "./";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    $fileType = strtolower(pathinfo($path,PATHINFO_EXTENSION));

    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "txt" ) {
  echo "Sorry, only JPG, JPEG, PNG, GIF & txt files are allowed.";

} else {

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). " has been uploaded. url: https://src.invaliduser.tk/". basename( $_FILES['uploaded_file']['name']);
    } else{
        echo "There was an error uploading the file, please try again! keep getting this error? email me";
    }
}
  }
?>