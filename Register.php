<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        
body{

background-image:url("Images/v2.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
margin: 0;
padding: 0;
}
.registerform h1{
padding: 10px 50px;
font-weight: bolder;
text-align: center;
text-transform: uppercase;
color: #fff;
font-size: 2em;
background-color:  rgb(31, 48, 116);
}
.registerform{
text-align: center;
}
.registerform input{
height: 40px;
border-radius: 10px;
width: 400px;
padding: 2%;
margin: 2%;
text-align: center;
color: black;
text-transform: capitalize;
font-weight: bold;
/*outline: none;*/
background: cadetblue;
border: none; 
position: relative; 
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
border-radius: 10px;
opacity: 0.8;
}
form button:hover{
font-weight: bold;
color: black;
opacity: 1;
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
    <div class="registerform">
        <h1>Registration Form</h1>
        <form action="" method="POST" >
            <input type="text" name="FullName" required placeholder="Full Name">
            <input type="tel"  name="MobileNo" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required placeholder="Mobile NO"><br>
            <input type="email" name="Email" required placeholder="Email">
            <input type="date" name="DOB" required placeholder="Date Of Birth"><br>
            <input type="password" name="Password" required placeholder="Password">
            <input type="password" name="RePassword" required placeholder="ReEnter Password"><br>
            <button type="submit" name="submit" >Submit</button>
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
     $FullName=$_POST['FullName'];
     $MobileNo=$_POST['MobileNo'];
     $Email=$_POST['Email'];
     $DOB=$_POST['DOB'];
     $Password=$_POST['Password'];
     $RePassword=$_POST['RePassword'];
if($Password==$RePassword){

   $insert="insert into register(FullName,MobileNo,Email,DOB,Password,Status,Voted) values('$FullName','$MobileNo','$Email','$DOB','$Password','OFF','NO')";

   $run_insert=mysqli_query($conn,$insert);
   if($run_insert===true){
       echo "<H5 style='color:green;text-align:center;'>Successfully Inseted</h5>";
   }else{
       echo "<H5 style='color:red;text-align:center;'>Not Inseted</h5>".mysqli_error($conn);
   }
}else{
    echo "<H5 style='color:red;text-align:center;'>Password is not Matched with RE-Entered Password</h5>";
}
}

?>

</body>
</html>