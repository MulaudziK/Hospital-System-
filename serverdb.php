<?php
session_start();
//connect to the database
$db = mysqli_connect('localhost','root','','hcsc');


$name = "";
$surname = "";
$cellnumber = "";
$errors = array();
$day = "";
$time = "";



 
//if the register button is clicked
if(isset($_POST['register']))
{
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $surname = mysqli_real_escape_string($db,$_POST['surname']);
    $cellnumber = mysqli_real_escape_string($db,$_POST['cellnumber']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    
    if(empty($name))
    {
        array_push($errors,"Name cannot be empty");
    }
     if(empty($surname))
    {
        array_push($errors,"Surname cannot be empty");
    }
     if(empty($cellnumber))
    {
        array_push($errors,"Cellnumber cannot be empty");
    }else 
        if($cellnumber < 10)
    {
        array_push($errors,"Cellnumber invalid");
    }
     if(empty($password_1))
    {
        array_push($errors,"Password cannot be empty");
    }
    
    
    
    
    if($password_1 != $password_2)
    {
        array_push($errors,"The two passwords do not match");
    }
    
    //if there are no errors,save information to database
    if(count($errors) == 0)
    {
        $password = md5($password_1); 
        $sql = "INSERT INTO `users`(name,surname,cellnumber,password) VALUES('$name','$surname','$cellnumber',$password)";
        mysqli_query($db,$sql);
        
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are logged in";
        header('location:index.php');
    }
}

//logging in
if(isset($_POST['login']))
{
    $name = mysqli_real_escape_string($db,$_POST['name']);
    
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    if(empty($name))
    {
        array_push($errors,"Name cannot be empty");
    }
     if(empty($password))
    {
        array_push($errors,"Password cannot be empty");
    }
    
    if(count($errors) == 0)
    {
        $password = md5($password);
        $query  = "SELECT * FROM `users`WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query(db, $query);
        
        if(mysqli_num_rows($result) == 1)
        {
                $_SESSION['name'] = $name;
                $_SESSION['success'] = "You are logged in";
                header('location:index.php');
        } else {
            array_push($errors,"The name/password combination is incorrect.");
            header('location: index.php');
        }
    }
}


//logging out

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['name']);
    header('location:Login.php');
}

if(isset($_POST['save']))
{
    $day = $_POST['day'];
    $time =$_POST['time'];
    
    $query = "INSERT INTO `appoint`('day','time')VALUES('$day',$time')";
    $query_run = mysqli_query($db, $query);
    
    if($query_run != true)
    {
        
          echo "Error!!!";
    }
 else {
      
           echo "Saved!!";
    }
}
?>