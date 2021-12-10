<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="registration";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
     $first_name = $_POST['fname'];
     $last_name = $_POST['lname'];
     $email = $_POST['email'];
     $password = $_POST['passd'];
     $rpassword = $_POST['rpassd'];


     $sql_query = "INSERT INTO registration (firstname, lastname, email, password, rpassword)
     VALUES ('$first_name','$last_name','$email','$password','$rpassword')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
