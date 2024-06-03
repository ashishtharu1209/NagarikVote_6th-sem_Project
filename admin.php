<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- JS, Popper.js, and jQuery -->  
    <style>
body{
    background-image:url("Images/v2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
}
.login h1{
    padding: 10px 50px;
    font-weight: bolder;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    font-size: 2em;
    background-color:  rgb(31, 48, 116);
}
form{
    /* display: block; */
    padding-top: 30px;
    text-align: center;
}
.login input{
    height: 40px;
    width: 400px;
    padding: 2%;
    margin: 2%;;
    text-align: center;
    color: black;
    text-transform: capitalize;
    font-weight: bold;
    /*outline: none;*/
    background: cadetblue;
    border: none; 
    border-radius: 10px;
    /* position: relative;  */
}
form button{
    background-color: red;
    color: white;
    padding: 16px 20px;
    margin: 20px ;
    border: none;
    cursor: pointer;
    width: 400px;
    margin-bottom:10px;
    opacity: 0.8;
    border-radius: 10px;
}
form button:hover{
    font-weight: bold;
    color: black;
    opacity: 1;
}
form a{
    text-decoration: none;
    font-weight: 600;
    color: black;
}
form a:hover{
    color: green;
}
.open-button {
    background-color: lightskyblue;
    font-weight: bold;
    padding: 8px 10px;
    border-style: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 100px;
    border-radius: 10px;
}
.open-button:hover{
    font-weight: bold;
    color: black;
    opacity: 1;
}
</style>
</head>
<body>
    <div class="login">
        <h1>admin panel</h1>
        <form action="" method="post" >
            <center>
            <input type="email" name="Username" required placeholder="Email"><br>
            <input type="password" name="Password" required placeholder="Password"><br>
            <button type="submit" name="submit" >Submit</button>
        </center>
        </form>
    </div>

    <button class="open-button" onclick="back()">Back</button>

<script>
    function back(){
        window.location="index.html";
    }
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
     $Username=$_POST['Username'];
     $Password=$_POST['Password'];
    
    $select="select * from admin where Username='$Username' and Password='$Password'";
    $run=mysqli_query($conn,$select);

    $row=mysqli_num_rows($run);
    if($row==1){
        echo "<script> window.open('adminPanel.php','_self') </script>";
        $_SESSION['Username']= $Username;
    }else{
        echo "<h5 style='color:red;text-align:center;'>Wrong Username or Password</h5>";
    }
}
?>
</body>
</html>