<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign in</title>
        <style>
            body{
                background: #222222;
            }
            input{
                padding: 10px;
                display: block;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <form action="check.php" method="post" id="signForm">
            <input type="text" name="name" placeholder="name">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" name="signin">
        </form>
    </body>
</html>
