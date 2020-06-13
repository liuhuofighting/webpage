<?php
if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")
{
    $user = $_POST["username"];
    $psw = $_POST["password"];
    if($user == "" || $psw == "" )
    {
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }
    else
    {

        $conn=mysqli_connect("39.98.172.164","yht","123456","phpvt");
            $sql = "INSERT INTO userinfo (username, password)
            VALUES ('$user', '$psw')";
            {
                $res_insert = mysqli_query($conn,$sql);
                //$num_insert = mysql_num_rows($res_insert);
                if($res_insert)
                {
                    echo "<script>alert('注册成功！'); history.go(-1);</script>";
                }
                else
                {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>