<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        *,
        body {
            padding: 0;
            margin: 0;
        }
        input {
            font-weight: 900;
            padding: 15px 5px;
            width: 100%;
            margin: 5px;
            border: unset;
            border-bottom: 1px solid #ddd;
            outline: unset;
            font-size: 16px;
            font-family: cursive;
        }
        input[type=submit]{
            cursor: pointer;
        }
        html{
            position: relative;
        }
        .login {
            width: 300px;
            position: absolute;
            top: 50%;
            right: 50%;
            transform: translate(50%, 50%);
        }
    </style>
</head>

<body>
    <form class='login' action="postLogin" method="post">
        <input name="email" type="text" placeholder="E-mail" />
        <input name="password" type="password" placeholder="Password" />
        <input type="submit" value="Login">
    </form>
</body>

</html>