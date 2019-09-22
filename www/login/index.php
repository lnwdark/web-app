<?php
require_once './../db-connect.php';
session_start();
if (!empty($_POST)) {
    $user_name = $_POST['Username'];
    $passwords = $_POST['Password'];
}
$sql = "SELECT * FROM users WHERE user_name = '$user_name'  and passwords = '$passwords' ";
$result = pg_query($dbconn,$sql);
$dataResule = pg_fetch_all($result);
if(!empty($dataResule[0]['user_name'])){
    $_SESSION['user_name'] = $dataResule[0]['user_name'];
    echo "<script>
    window.location.href='/index.php'
</script>";
}
?>

<link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">

<div class="container" >
    <div class="row " style="margin-top: 150px">
        <div class="col-md-4 offset-md-4">
            <h3 class="display-4">เข้าสู่ระบบข่าว</h3>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="Username"  name="Username" aria-describedby="Username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="Password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block ">Login</button>
                <a href="" class="text-center">ยังไม่เป็นสมาชิกสมัคร กดสมัครได้ที่นี่</a>
            </form>

        </div>
    </div>
