<?php include('serverdb.php');?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"
    </head>
    <body>
        <div class="header">
            <h2>Login</h2>
        </div>
         
        <form method="POST" action="login.php">
             <!-- displaying errors-->
            <?php include('errors.php'); ?>
             <p>Lisa's Community Health Centre</p>
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name">
            </div>
             
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            
            
                
            <div class="input-group">
                
                <button type="submit" name="login" class="btn">Login</button>
            </div>
                
            <p>
                Not Registered?<br><a href="Register.php">Register</a>
            </p>    
                
                
        </form>
    </body>
     <footer>
        <p>&copy; Mulaudzi K 2020</p>
    </footer>
</html>
