<?php
    require_once('operations.php');
    include('../admin/header.php'); 
    include('../admin/navbar.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="../admin/style/editform.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1 class="text-center my-3">男團照片上傳</h1>
    <div class="container d-flex justify-content-center">
        <form action="gdisplay.php" method="post" class="w-50" enctype="multipart/form-data">
            <?php $artist=$_GET['data'];
            inputFields("romname","romname","$artist","text") ?>
            <?php inputFields("file","file","","file") ?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </div>





</body>
</html>