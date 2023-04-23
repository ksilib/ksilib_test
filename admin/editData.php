<?php
include('header.php'); 
include('navbar.php'); 
?>
<?php
    $artist = $_GET["data"];
    // 設置一個空陣列來放資料
    $datas = array();
    // sql語法存在變數中
    require_once 'C:\xampp\htdocs\includes\dbinfo.inc.php';
    $sql = "SELECT * FROM `maleinfo` AS userData WHERE `藝名`='$artist' ";

    // 用mysqli_query方法執行(sql語法)將結果存在變數中
    // 如果有資料
    $result = $conn->query($sql);
    if($result->num_rows != 1){
        // redirect to show page
        die('id is not in db');
    }
    $data = $result->fetch_assoc();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/editform.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<form action="../admin/maleartist/modify.php?artist=<?= $artist ?>" method="POST">
    <h3>Edit Form</h3>
    <div class="form-group">
        <label for="name">藝名</label>
        <input type="text" class="form-control" name="藝名" id="name" value="<?= $data['藝名']?>"/>
    </div>
    <div class="form-group">
        <label for="name">本名</label>
        <input type="text" class="form-control" name="本名" id="name" value="<?= $data['本名']?>">
    </div>
    <div class="form-group">
        <label for="name">生日</label>
        <input type="text" class="form-control" name="生日" id="name" value="<?= $data['生日']?>">
    </div>
    <div class="form-group">
        <label for="name">星座</label>
        <input type="text" class="form-control" name="星座" id="name" value="<?= $data['星座']?>">
    </div>
    <div class="form-group">
        <label for="name">出生地</label>
        <input type="text" class="form-control" name="出生地" id="name" value="<?= $data['出生地']?>">
    </div>
    <div class="form-group">
        <label for="name">ins</label>
        <input type="text" class="form-control" name="ins" id="name" value="<?= $data['ins']?>">
    </div>
    <div class="form-group">
        <label for="name">團體</label>
        <input type="text" class="form-control" name="所屬團體" id="name" value="<?= $data['所屬團體']?>">
    </div>
    <div class="form-group">
        <label for="name">出道日期</label>
        <input type="text" class="form-control" name="出道日期" id="name" value="<?= $data['出道日期']?>">
    </div>
    <div class="form-group">
        <label for="price">隊內擔當</label>
        <input type="text" class="form-control" name="隊內擔當" id="price" value="<?= $data['隊內擔當']?>">
    </div>
    <div class="form-group">
        <label for="price">公司</label>
        <input type="text" class="form-control" name="所屬公司" id="price" value="<?= $data['所屬公司']?>">
    </div>
    <div class="form-group">
        <label for="description">備註</label>
        <textarea class="form-control" name="經歷" id="description" cols="30" rows="10"><?= $data['經歷']?></textarea>
    </div>

    <input type="submit" name="editForm" value="更新" class="btn btn-primary btn-block">
</form>