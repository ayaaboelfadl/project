<?php 

$Name = $_REQUEST['Name']; 
$Email = $_REQUEST['email']; 
$pass = $_REQUEST['pass'];  

if(isset($_POST['Login '])){ 

   
    $host = "localhost"; 
    $user = "root"; 
    $password ="";
    $db = "tech"; 

    @$conn= mysqli_connect($host,$user,$password,$db);
    
    @$insert= "insert into  regester values('$Name','$email','$pass')";
   
   @ mysqli_query($conn,$insert);

  

    if($conn){
        
        echo("<h1 style=color:green;> Your Registartion is Done</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed</h1>");
    }
   
}
   
?>

