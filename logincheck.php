<?php
    session_start();
    $user = $_POST["username"];
    $psw = $_POST["password"];
        if ($user == "" || $psw == "") {
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
        } else {
            $conn = mysqli_connect("39.98.172.164", "yht", "123456", "phpvt");
            $sql = "select username,password from userinfo where username = '$user' and password = '$psw'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num) {
                $_SESSION['user_id'] = $user;
                setcookie('user_id', $user, time() + 60 * 60);
                echo '<script>window.location.href="first.php"</script>';
            }
                else{
                    echo "<script>alert('用户名或密码不正确！');
                    history.go(-1);</script>";
            }
        }
?>