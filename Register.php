<?php include('serverdb.php');?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"
    </head>
    <body>
        <div class="header">
            <h2>Registration</h2>
        </div>
    
        <form method="POST" action="Register.php">
            <!-- displaying errors-->
            <?php include('errors.php'); ?>
             <p>Lisa's Community Health Centre</p>
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name">
            </div>
            
            <div class="input-group">
                <label>Surname</label>
                <input type="text" name="surname">
            </div>
                
            <div class="input-group">
                <label>CellNumner</label>
                <input type="text" name="cellnumber">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            
            <div class="input-group">
                <label>Cornfirm Passsword</label>
                <input type="password" name="password_2">
            </div>
                
            <div class="input-group">
                
                <button type="submit" name="register" class="btn">Register</button>
            </div>
                
            <p>
                Already a member?<br> <a href="Login.php">Login</a>
            </p>    
                
                
        </form>
    </body>
    <footer>
        <p>&copy; Mulaudzi K 2020</p>
    </footer>
</html>
