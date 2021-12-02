<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
 
  
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "formjs";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database); 


  if ($conn){echo "Successful";}
  // Die if connection was not successful
  if (!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{ 
    // Submit these to a database
    // Sql query to be executed 
    $sql = "INSERT INTO `tbl_form` (`firstname`, `lastname`, `email`, `password`, `gender`, `phone`) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender', '$phone' )";
    $result = mysqli_query($conn, $sql);
  }
  if($result){
    echo "Your entry has been submitted successfully!";
  
  }
  else{
      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      echo "We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!";
   }
}

?>