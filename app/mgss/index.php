<link rel="stylesheet" type="text/css" href="../theme/custom1/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../theme/custom1/custom1.css">
<script src="../theme/custom1/jquery.min.js"></script>
<script src="../theme/custom1/bootstrap.min.js"></script>
<script src="../theme/custom1/customt1.js"></script>
<?php define('DEBUG', false);
error_reporting(E_ALL);
if (DEBUG){ini_set('display_errors', 'On');}
else {ini_set('display_errors', 'Off');} ?>
<?php if(!empty($_POST["gid"]) && !empty($_POST["sun"])){
$filename = $_POST["sun"];
$folderpath = "../../" . $filename;
mkdir($folderpath);

$file = fopen($folderpath . '/'.$filename.'.csv', 'w');
fputcsv($file, array($_POST["gid"]));
fclose($file);

copy('../temp/temp3/index.php', $folderpath . '/index.php');
} ?>
<br><div class="container">
<form method="post" action="">
<input type="text" class="form-control" name="gid" placeholder="Enter GoogleSpreadsheetID"><br>
<input type="text" class="form-control" name="sun" placeholder="Secret URLName"><br>
<input type="submit" class="fileUploadb btn btn-default" value="SUBMIT" name="submit">
</form></div>