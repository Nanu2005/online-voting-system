<?php
    include("guri.php");

   $name = $_POST['name'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];
   $password = $_POST['password'];
   $address = $_POST['address'];
   $image = $_FILES['photo'];
   $tmp_name = $_FILES['tam_name']['photo'];
   $role = $_POST['role'];
   $gender = $_POST['gender'];
   


   if($password==$cpassword){
        move_uploaded_file($tmp_name, "uploads images/$image");
        $insert = mysqli_query($connect,"INSERT INTO v1 (name, mobile, address, photo, role, status, votes, password) VALUES('$name', '$mobile', '$address', '$photo', '$role', 0, 0, '$password')");
        if($INSERT){
            echo
            <script>
               alert("Registration is Successfull");
               window.location ="loginnn.html";
            </script>
            ;
        }
        else{
            echo
            <script>
               alert("Some error Occured!");
               windoow.location ="regii.html";
            </script>
            ;
        }
   }
    else
    {
          echo
          <script>
             alert("password and confirm password does not match");
             windoow.location ="regii.html";
          </script>
          ;
   }

?>