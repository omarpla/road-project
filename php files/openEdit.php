<?php
      $dbhost= "localhost";
      $dbuser="root";
      $dbpass="";
      $dp="signup";
      $conn=new mysqli($dbhost,$dbuser,$dbpass,$dp);   
      
      
      
      if(isset($_POST['submit']))
      {    
       
        $username = $_POST['username'];
        $user_password=$_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '".$username."' AND user_password = '".$user_password."'";
        $result=mysqli_query($conn,$sql);
        
          if (mysqli_num_rows($result) > 0) {
            
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                
                //echo "username: " . $row["username"].' and ' . "password: " . $row["user_password"];
                header('location:edit.php');
                exit();
              }
            }
             else {
               $message="you don't have an account";
              echo "<script type='text/javascript'>alert('$message');</script>";
            }      
          }
    ?>