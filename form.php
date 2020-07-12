<?php
include "connection.php";
      include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>Application Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,height=device-height, initial-sscale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
  .form-group{
    width: 250px;
    height: 30px;
  }
  .section{
    background-image: url(images/form1.png);
  }
</style>
</head>
<body>
<section class="section" style="height:100%;">
<div  style="background-color: white; margin-top: -70px; width: 1519px; height: 100%;     background-image: url(images/form1.png);
">
  
  <h1 style="text-align:center; font-size:35px; font-family:Lucida Console; margin-top: 70px; margin-left: 370px; color:black; font-weight: 800;">SCHOLARSHIP APPLICATION FORM</h1>
  <br>
  <form class="form-horizontal"  name="Registration" action="" method="post">
  <div class="login" >
  <div class="form-group" style="float:left;margin-top:10px">
    <label>1:First Name</label>
    <input class="form-control"  type="text" name="first" placeholder="First Name" required  >
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;">
    <label>2:Last Name</label>
    <input class="form-control"  type="text" name="last" placeholder="last Name" required  >
  </div><br>
  
   <div class="form-group" style="float:right;  margin-top:-50px;">
     <label>3:Username</label>
    <input class="form-control" type="text" name="username" placeholder="Username" required>
  </div><br><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>4:Date Of Birth</label>
    <input class="form-control" type="date" name="dob" placeholder="Date Of Birth" required  >
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;" >
    <label>5:Father's Name</label>
    <input class="form-control" type="text" name="fname" placeholder="Father's Name" required  >
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;">
  <label>6:Mother's Name</label>
  <input class="form-control" type="text" name="mname" placeholder="Mother's Name" required  ></div><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>7:Class</label>
    <input class="form-control" type="text" name="standard" placeholder="Class(January 2020)" required><br>
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;" >
    <label for="class">8:Choose a Group As your Class:</label>
    <select style="color:black;" name="groupss" required="" >
    <option style="color:black;" value="None">None</option>
      <option style="color:black;" value="groupA">Group A(class 3,4,5)</option>
      <option style="color:black;" value="groupB">Group B(class 6,7,8)</option>
      <option style="color:black;" value="groupC">Group C(class 9,10)</option>
      <option  style="color:black;" value="groupD">Group D(class 11,12)</option>
      <option  style="color:black;" value="groupE">Group E(gradution student (age<29))</option>
    </select>
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;">
    <label>9:Name Of School</label>
    <input class="form-control" type="text" name="school" placeholder="Name Of school" required>
  </div><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>10:Village Name</label>
      <input class="form-control" type="text" name="village" placeholder="Village" required  >
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;" >
    <label>11:Post Name</label>
     <input class="form-control" type="text" name="posts" placeholder="Post" required>
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;">
    <label>12:Block Name</label>
     <input class="form-control" type="text" name="block" placeholder="Block" required  >
  </div><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>13:Pincode</label>
    <input class="form-control" type="text" name="pin" placeholder="pincode" required  >
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;" >
    <label>14:Sub District</label>
    <input class="form-control" type="text" name="sub" placeholder="Sub District" required  >
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;">
    <label>15:District</label>
    <input class="form-control" type="text" name="dist" placeholder="District" required  >
  </div><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>16:State</label>
    <input class="form-control" type="text" name="state" placeholder="State" required="">
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;">
    <label>17:Email(Optional)</label>
    <input class="form-control" type="email" name="email" placeholder="Email">
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;" >
    <label>18:Contact No.</label>
    <input class="form-control" type="text" name="contact" placeholder="Phone No(Whatsapp no.)" required  >
  </div><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>19:Account No.</label>
    <input class="form-control" type="text" name="account" placeholder="Student Bank Account No." required  >
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;">
    <label>20:Name Of Bank</label>
    <input class="form-control" type="text" name="bank" placeholder="Name of bank" required  >
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;">
    <label>21:IFSC Code</label>
    <input class="form-control" type="text" name="ifsc" placeholder="IFSC Code" required  >
  </div><br>
  <div class="form-group" style="float:left;margin-top:-10px">
    <label>22:Bank Branch Name</label>
    <input class="form-control" type="text" name="branch" placeholder="Bank branch" required  >
  </div><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;">
    <label>23:Passport Size Image</label>
    <input class="form-control" type="file" name="pic" placeholder="Passport size image" required  >
  </div><br>
  <div class="form-group" style="float:right;  margin-top:-60px;" >
    <label>24:Signature</label>
    <input class="form-control" type="file" name="sign" placeholder="Signature" required  >
  </div><br><br><br>
  <div class="form-group" style="margin-left: 450px; margin-top:-15px;" >
    <input class="btn btn-success" type="submit" name="submit" value="Submit" style="color: black; height:29px; width:120px;"><br>
  </div><br>

    </div>
  </form>
  
</div>
</section>
 <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `scholar`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `scholar` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[dob]','$_POST[fname]','$_POST[mname]' , 
            '$_POST[standard]','$_POST[groupss]','$_POST[school]','$_POST[village]','$_POST[posts]','$_POST[block]','$_POST[sub]','$_POST[dist]','$_POST[state]','$_POST[pin]', '$_POST[email]', '$_POST[contact]','$_POST[account]','$_POST[bank]','$_POST[ifsc]','$_POST[branch]','$_POST[pic]','$_POST[sign]');");
        ?>
          <script type="text/javascript">
            //alert("Registration Successfull");
          window.location="receipt.php";
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>
    <div>
  <?php
  include 'footer.php';
  ?>
  </div>

  </div>
</body>
</html>