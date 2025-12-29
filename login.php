<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
        <div class="header">
                <h4>Login</h4>
        </div>

        <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                        <label>اسم المستخدم</label>
                        <input type="text" name="username">
                </div>
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>
                <div class="input-group">
                        <button type="submit" class="btn" name="login_user"><strong>تسجيل</strong></button>
                </div>
                <p>
                        Not yet a member? <a href="/regestration/register.php">انشاء حساب</a>
                </p>
        </form>
</body>

</html>