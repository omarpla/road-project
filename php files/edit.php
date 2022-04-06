<?php
      $dbhost= "localhost";
      $dbuser="root";
      $dbpass="";
      $dp="signup";
      $conn=new mysqli($dbhost,$dbuser,$dbpass,$dp);   
      
      
      
      if(isset($_POST['edit']))
      {    
       
        $username = $_POST['username'];
        $user_new_password=$_POST['password'];
        $sql = "UPDATE user SET user_password='".$user_new_password."' WHERE username = '".$username."'";
              
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        }
        if(isset($_POST['remove']))
      {    
       
        $username = $_POST['username'];
        $sql = "DELETE FROM user WHERE username = '".$username."'";
              
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        }
          $conn->close();
          ?>