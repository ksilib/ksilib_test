<?php
if (isset($_POST["submit"])) {
    $artist = $_POST["artist"];
    // 設置一個空陣列來放資料
    $datas = array();
    // sql語法存在變數中
    require_once 'C:\xampp\htdocs\includes\group.inc.php';
    $sql = "SELECT * FROM `maleg` AS userData WHERE `團名`='$artist' ";

    // 用mysqli_query方法執行(sql語法)將結果存在變數中
    // 如果有資料
    $result = $conn->query($sql);
    if($result->num_rows != 1){
        // redirect to show page
        die('id is not in db');
    }
    $data = $result->fetch_assoc();
}?>
<form action="./modify.php?artist=<?= $artist ?>" method="POST" style="margin: auto;width:200px">
    <h3>Edit Form</h3>
    <div class="form-group">
        <label for="name">團名</label>
        <input type="text" class="form-control" name="團名" id="name" value="<?= $data['團名']?>">
    </div>
    <div class="form-group">
        <label for="name">出道日期</label>
        <input type="text" class="form-control" name="出道日期" id="name" value="<?= $data['出道日期']?>">
    </div>
    <div class="form-group">
        <label for="name">口號</label>
        <input type="text" class="form-control" name="口號" id="name" value="<?= $data['口號']?>">
    </div>
    <div class="form-group">
        <label for="name">星座</label>
        <input type="text" class="form-control" name="所屬公司" id="name" value="<?= $data['所屬公司']?>">
    </div>
    <div class="form-group">
        <label for="name">粉絲名</label>
        <input type="text" class="form-control" name="粉絲名" id="name" value="<?= $data['粉絲名']?>">
    </div>
    <div class="form-group">
        <label for="name">代表作品</label>
        <input type="text" class="form-control" name="代表作品" id="name" value="<?= $data['代表作品']?>">
    </div>
    <div class="form-group">
        <label for="name">團名由來</label>
        <input type="text" class="form-control" name="團名由來" id="name" value="<?= $data['團名由來']?>">
    </div>
    

    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
</form>