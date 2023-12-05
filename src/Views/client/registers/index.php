<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=text]:focus, input[type=password]:focus {
            outline: none;
            border: 1px solid #04AA6D;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 20px;
        }

        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            border-radius: 4px;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        a {
            color: #04AA6D;
        }
    </style>
</head>
<body>

<form action="/client/registers/index" method="post" enctype="multipart/form-data">
    <div class="container">
        <h1 style="text-align: center;">Đăng Kí Tài Khoản</h1>
        <hr>

        <label for="name_account"><b>Name Account</b></label>
        <input type="text" placeholder="Enter Name" name="name_account" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <input type="text" name="id_role" hidden value="1" style="display: none;">
        
        <span style="color: red;"><?php echo $tb; ?></span>

        <hr>
        <button type="submit" class="registerbtn" name="btn_submit">Register</button>
    </div>
</form>

</body>
</html>
