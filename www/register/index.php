<?php
require_once './../db-connect.php';
if (!empty($_POST)) {
    $user_name = $_POST['Username'];
    $passwords = $_POST['Password'];
    $ord_amount = $_POST['ord_amount'];
    $email = $_POST['Email'];
    $status = 1; // status  =1 สมัครสมาชิก
    $created_at = date('Y-m-d');
}
$sql = "INSERT INTO users (user_name,passwords,email,status,ord_amount,created_at) 
 values ('$user_name','$passwords','$email',$status,$ord_amount,'$created_at')";

$result = pg_query($dbconn,$sql);
if ($result ){
    echo "<script>
    window.location.href='/login/index.php'
</script>
";
}else{
    echo "<script>
    window.location.href='index.php'
</script>
";
}
?>

<link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">

<div class="container">
    <div class="row " style="margin-top: 150px">
        <div class="col-md-4 offset-md-4">
            <h3 class="display-4">สมัครสมาชิก</h3>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="Username" name="Username" aria-describedby="Username"
                           placeholder="Username " required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="Password"
                           placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">อายุ</label>
                    <input type="text" class="form-control" id="ord_amount" name="ord_amount" placeholder="อายุ"
                           required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="email" name="Email" placeholder="Email" required>
                </div>
                <button type="submit" class="btn btn-success btn-block ">สมัครสมาชิก</button>
            </form>

        </div>
    </div>
