<?php

require_once __DIR__.'/autoload.php';
require_once __DIR__.'/src/Helpers.php';

\Cloudinary::config(array(
'cloud_name' => 'fivegins',
'api_key' => '221242981627757',
'api_secret' => 'iYS6KdAKmBpQDDY-IoczW0kQ0sA'
));
?>
<html>
    <head><meta charset="UTF-8"></head>
    <body>
        <h1>S3 upload example</h1>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['userfile']) && $_FILES['userfile']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	$kq = \Cloudinary\Uploader::upload($_FILES['userfile']['tmp_name']);
	print_r($kq);
}
?>
        <h2>Upload a file</h2>
        <form enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input name="userfile" type="file"><input type="submit" value="Upload">
        </form>
    </body>
</html>