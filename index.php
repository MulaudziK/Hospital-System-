<?php include('serverdb.php');
//if user is not logged in they cant see this page
if(empty($_SESSION['name']))
{
    header('location: login.php');
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"
    </head>
    <body>
        <div class="header">
            <h2>Home page</h2>
        </div>
        
        <div class ="content">
            <?php if(isset($_SESSION['success'])):?>
            <div class="error success">
                <h3>
                    <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            <?php endif ?>
            <?php if (isset($_SESSION["name"])):?>
            <p>Lisa's Community Health Centre</p>
            <p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
            
            <form method="POST" action="index.php">
            
             <h3>Appointment Date</h3>
            <div class="input-group">
                <label>Day</label> 
                <select name="day">
                    <option value="">--Select--</option>
                    <option value="Monday">MONDAY</option>
                    <option value="Tuesday">TUESDAY</option>
                    <option value="Wednesday">WEDNESDAY</option>
                    <option value="Thursday">THURSDAY</option>
                    <option value="Friday">FRIDAY</option>
                    <option value="Saturday">SATURDAY</option>
                </select>
            </div>
             
             <div class="input-group">
                <label>Time</label> 
                <select name="time">
                    <option value="">--Select--</option>
                    <option value="08H00 - 09H00">08H00 - 09H00</option>
                    <option value="09H00 - 10H00">09H00 - 10H00</option>
                    <option value="10H00 - 11H00">10H00 - 11H00</option>
                    <option value="11H00 - 12H00">11H00 - 12H00</option>
                    <option value="13H00 - 14H00">13H00 - 14H00</option>
                    <option value="14H00 -15H00">14H00 -15H00</option>
                    <option value="15H00 -16H00">15H00 -16H00</option>
                </select>
            </div>
      
            <div class="input-group">
                
                <button type="submit" name="save" class="btn">Save</button>
            </div>
          
        </form>
            <p><a href="index.php?logout='1'"  style="color: red;">Logout</a></p>
            <?php endif?>
        </div>
    </body>
     <footer>
        <p>&copy; Mulaudzi K 2020</p>
    </footer>
</html>
