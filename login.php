<?php
session_start();
if (isset($_SESSION['user_id']) || isset($_COOKIE['user_id'])) {//如果用户已经登录
    echo '<script>window.location.href="first.php"</script>';
    exit(0);
}
?>
<form action="logincheck.php" method="post">
    用户名：<input type="text" name="username" />
    <br />
    密码：<input type="password" name="password" />
    <br />
    <input type="Submit" name="Submit" value="登录" />
    <a href="register.php">注册</a>
</form>