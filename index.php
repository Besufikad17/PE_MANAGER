<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeeManager</title>
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php 
       require("views/header.php");

       echo getenv('DNS');

       $content = $isLoggedIn ? 
                "" : 
                "<div class='bg-container'>
                    <div class='bg-row'>
                        <img src='assets/imgs/empty2.png' alt='login' class='bg2' /><br>
                    </div>
                    <span class='msg'>No employees :( register as user <a href='signup.html'>here</a></span>
                </div>"; 
    ?>
    <?= $content ?>
</body>
</html>