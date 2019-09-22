<?php
session_start();
if(!empty($_SESSION["user_name"])){
    unset($_SESSION["user_name"]);
    echo "<script>
    window.location.href='/login/index.php'
</script>";
}
