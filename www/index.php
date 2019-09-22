<?php
session_start();
require_once './db-connect.php';
$sql = "SELECT * FROM users   ";
$result = pg_query($dbconn,$sql);
$dataUser = pg_fetch_all($result);

if(empty($_SESSION["user_name"])){
   $user_name =  $_SESSION["user_name"];
    echo "<script>
    window.location.href='/login/index.php'
</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">

    <title>ระบบข่าว</title>
</head>
<body>
<?php
require './layout/header.php'
?>
<div class="container" style="margin-top: 15px">
    <h3 class="display-3"> สวัสดีคุณ  <?php echo $user_name; ?></h3>

    <br>
    <h4 class="">รายชื่อสมาชิกทั้งหมด</h4>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Password</th>
            <th>อายุ</th>
            <th>อีเมล์</th>
            <th> สถานะ</th>
            <th> วันที่สมัคร</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($dataUser as$key=> $model):?>
        <tr>
            <td scope="row"><?=$key+1?></td>
            <td><?=$model['user_name'];?></td>
            <td><?=$model['passwords'];?></td>
            <td><?=$model['ord_amount'];?></td>
            <td><?=$model['email'];?></td>
            <td><?=$model['status']==1?'<span class="badge badge-success">ปกติ</span>':''?></td>
            <td><?=$model['created_at'];?></td>
        </tr>
     <?php endforeach; ?>
    </table>
</div>
</body>
</html>