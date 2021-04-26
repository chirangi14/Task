<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Student Details</title>
        <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
        <meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: grey;
  margin-left: 370px;
  margin-right: 320px;
  margin-bottom: 70px;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=email], input[type=number], input[type=file] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus , input[type=email]:focus, input[type=number]:focus, input[type=file]:focus {
  background-color: #ddd;
  outline: none;
}

.spec , .gender
{
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  cursor: pointer;
}
.spec:focus , .gender:focus
{
    background-color: #ddd;
    outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
/*.signin {
  background-color: #f1f1f1;
  text-align: center;
}*/
</style>
</head>
<body>



<br/><br/><br/>
<form action="stud_details.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Student Details</h1>
    <p>Please fill this form </p>
    <hr>

    <label ><b>Name</b></label>
    <input type="text" placeholder="Enter  Name" name="stud_name" id="stud_name" required pattern="[a-zA-Z .]+" title="It should be characters only">

    <label ><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    
    <label ><b>Mobile Number</b></label>
    <input type="number" placeholder="Enter Mobile Number" name="mob_no" id="mob_no" required  title="It should be numbers only">

    
    <label ><b>State</b></label>
    
    <select name="state" class="spec" required>
    <option value="" disabled="disabled" selected="true">Select One</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Maharastra">Maharastra</option>

    </select>
    
    
    
    <label ><b>City</b></label>
    
    <select name="city" class="spec" required>
    <option value="" disabled="disabled" selected="true">Select One</option>
    <option value="Surat">Surat</option>
    <option value="Pune">Pune</option>
    </select>

    <label ><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" id="address" required>
    <hr>
    
    
    
    
    <button type="submit" class="registerbtn" name="submit" >Add</button>
    <button type="delete" class="registerbtn" name="delete" >Delete</button>



  </div>
  
</form>
<div class="container">
<a href="update.php">
     
      <button type="update" class="registerbtn" name="update" >Update</button>
   </a>
</div>

</body>
</html>

<?php
  
  
               
    $con = mysqli_connect("localhost:3310","root","","task");



    if(isset($_POST["submit"]))
    {
       
        $stud_name = $_POST['stud_name'];
        $email = $_POST['email'];
        $mob_no = $_POST['mob_no']; 
        $state = $_POST['state'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        
      
            // Insert image file name into database
            $insert = "insert into student (stud_name , email , mob_no , state , city , address) values ('$stud_name' , '$email' , '$mob_no', '$state' , '$city' , '$address')"or die("<script>alert('Error');</script>");
            
          


          if (mysqli_multi_query($con,$insert))
           {
            
            echo '<script type="text/javascript">';
            echo ' alert("Your data saved Successfully !! ")';
            echo '</script>';  
            
          }
          else 
          {   
            echo '<script type="text/javascript">';
            echo ' alert("Something went wrong , Please try again!!")';
            echo '</script>';
          }
            
   }          

       
    if(isset($_POST['delete']))
    {
      

       $query = "DELETE FROM student";
       $query_run = mysqli_query($con,$query);

       if($query_run)
       {
        echo '<script type="text/javascript">';
            echo ' alert("Your data Deleted Successfully !! ")';
            echo '</script>'; 
       }
       else
       {
          echo '<script type="text/javascript">';
            echo ' alert("Something went wrong , Please try again!!")';
            echo '</script>';
       }
    }


    if(isset($_POST['update']))
    {
      
      $stud_name = $_POST['stud_name'];
        $email = $_POST['email'];
        $mob_no = $_POST['mob_no']; 
        $state = $_POST['state'];
        $city = $_POST['city'];
        $address = $_POST['address'];


       $query1 = "UPDATE student SET email='$email' , mob_no='$mob_no', state='$state', city='$city', address='$address' WHERE stud_name='$stud_name'";
       $query1_run = mysqli_query($con,$query1);

       if($query1_run)
       {
        echo '<script type="text/javascript">';
            echo ' alert("Your data Updated Successfully !! ")';
            echo '</script>'; 
       }
       else
       {
          echo '<script type="text/javascript">';
            echo ' alert("Something went wrong , Please try again!!")';
            echo '</script>';
       }
    }
            
    

?>
