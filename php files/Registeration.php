<?php
              $dbhost= "localhost";
              $dbuser="root";
              $dbpass="";
              $dp="signup";
              $conn=new mysqli($dbhost,$dbuser,$dbpass,$dp);   
              
              
              
              if(isset($_POST['submit']))
              {    
               
                $fisrt_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $phone_num=$_POST['phone'];
                $username=$_POST['username'];
                $user_password=$_POST['password'];
                $date_of_birth=$_POST['date_of_birth'];
                $gender="";
                if($_POST['gender']=="male"){
                $gender="male";
                }
                else
                {
                    $gender="female";
                }
                $sql="insert into user (first_name,last_name,phone_number,username,user_password,date_of_birth,gender) VALUES ('$fisrt_name', '$last_name', '$phone_num', '$username', '$user_password', '$date_of_birth', '$gender')";
                $result=mysqli_query($conn,$sql);
                
                if($result){
                    header('location:../html/login.html');
                    $message="welcome ".$fisrt_name." ".$last_name . ", successful register!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    
                }else{
                    $message="failed register";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
                  }
            ?>