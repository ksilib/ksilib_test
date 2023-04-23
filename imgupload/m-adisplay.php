<?php
    require_once('operations.php');
    include('../admin/header.php'); 
    include('../admin/navbar.php'); 
?>
<?php
    require_once('connect.php');
    if(isset($_POST['submit'])) {
        $romname=$_POST['romname'];
        $image=$_FILES['file'];
        $imagefilename=$image['name'];
        $imagefileerror=$image['error'];
        $imagefiletemp=$image['tmp_name'];
        $filename_separate=explode('.',$imagefilename);
        $file_extension=strtolower(end($filename_separate));
        
        $extension=array('jpeg','jpg','png','jfif');
        if(in_array($file_extension,$extension)) {
            $upload_image='../images/'.$imagefilename;
            move_uploaded_file($imagefiletemp,$upload_image);
            $sql="INSERT INTO `image`(`藝名`, `照片`) VALUES ('$romname','$upload_image')";
            $result=mysqli_query($conn,$sql);
            if($result) {
                echo "上傳成功";
            }else {
                echo "上傳失敗";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="../admin/style/editform.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    





</body>
</html>