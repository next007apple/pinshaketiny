<?php
define('DEBUG', false);
error_reporting(E_ALL);
if (DEBUG){ini_set('display_errors', 'On');}
else {ini_set('display_errors', 'Off');}
?>
<link rel="stylesheet" type="text/css" href="../theme/custom1/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../theme/custom1/custom1.css">
<script src="../theme/custom1/jquery.min.js"></script>
<script src="../theme/custom1/bootstrap.min.js"></script>
<script src="../theme/custom1/customt1.js"></script>
<?php if(isset($_FILES['filename']['name'])){
if($_FILES['filename']['type'] == 'application/vnd.ms-excel'){
$fn = $_FILES['filename']['name'];
$filename = preg_replace("/\.[^.]+$/", "", $fn);
$folderpath = "../../" . $filename;
mkdir($folderpath);
copy('../temp/temp1/index.php', $folderpath . '/index.php');
$tmpName = $_FILES['filename']['tmp_name'];
$name = basename($_FILES['filename']['name']);
move_uploaded_file($tmpName, $folderpath . '/' . $name);}}

if(isset($_FILES['filename2']['name'])){
if($_FILES['filename2']['type'] == 'application/vnd.ms-excel'){
$fn2 = $_FILES['filename2']['name'];
$filename2 = preg_replace("/\.[^.]+$/", "", $fn2);
$folderpath2 = "../../" . $filename2;
mkdir($folderpath2);
copy('../temp/temp2/index.php', $folderpath2 . '/index.php');
$tmpName = $_FILES['filename2']['tmp_name'];
$name = basename($_FILES['filename2']['name']);
move_uploaded_file($tmpName, $folderpath2 . '/' . $name);}}

if(isset($_POST["folder"])){
unlink('../../' . $_POST["folder"] . '/index.php');
unlink('../../' . $_POST["folder"] . '/' . $_POST["folder"] . '.csv');
rmdir('../../' . $_POST["folder"]);} ?>
<div class="container">
<form method="post" action="" enctype="multipart/form-data">
<center><br><br>
<div class="fileUpload blue-btn btn width100">
<span>Add CSV</span>
<input type="file" class="uploadlogo" name="filename" accept=".csv">
</div>
<div>
<input type="submit" class="fileUploadb btn btn-default" value="UPLOAD" name="submit">
<br>
</div>
</center>
</form>

<form method="post" action="" enctype="multipart/form-data">
<center><br><br>
<div class="fileUpload blue-btn btn width100">
<span>Add CSV(Transparent)</span>
<input type="file" class="uploadlogo" name="filename2" accept=".csv">
</div>
<div>
<input type="submit" class="fileUploadb btn btn-default" value="UPLOAD" name="submit">
<br>
</div>
</center>
</form>

<form method="post" action="">
<input type="text" class="form-control" name="folder" placeholder="Delete CSV">
</form>
</div>