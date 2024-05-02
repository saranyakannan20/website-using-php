<?php

  session_start();
    if(!isset($_SESSION['user']))
    {
      header("Location: dbi.php");
    }
    if($_SESSION['user']=='admin')
    {
      header("Location: index_admin.php");
    }
    
    if($_SESSION['user']=='student_place' )
    {
      header("Location: index_student_placement.php");
    }
    if($_SESSION['user']=='company')
    {
      header("Location: index_company.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Index of student</title>
  <link rel="stylesheet" type="text/css" href="1.css"> 
  <link rel="shortcut icon" type="image/png" href="dbi.jpng">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body >
  <div class="list-unstyled3" >
          <ul>
            <li><a href="dbi.php"><img src="dbi.jpg" alt="PEC poonamallee"  class="logo2" height="50"  align="left"/></a></li>
              <li style="float:right"><a  href="logout.php" title="<?php echo $_SESSION['student_name']; ?> ">Log Out</a></li> 
  
            <div class="para">
            <p> Training &amp; Placement,PEC poonamallee</p>
                </div>  
                   </ul>
          
        </div>
    
<div class="index_student_intern">
        <ul class="list-unstyled4 list-horizontal-layout right-align">
            <a href="profile_student.php" class="btn4 ">View Profile</a>
            <a href="intern_visit_company.php" class="btn4">View Companies</a>
        </ul>
        <ul class="list-unstyled4 list-horizontal-layout right-align">
            <a href="profile_student_update_int.php" class="btn5 ">Update Profile</a>
            <a href="apply_intern.php" class="btn5">Apply For Company</a>
            
        </ul>
</div>

<div class="col-sm-4">
        <h3 class="mg-md  text-right tc-dim-gray">
          Training &amp; Placement Office
        </h3>
        <p class="text-right">
         poonamallee, Bangalore trunk Road<br>Panimalar Engineering College<br>chennai-600123
        </p>
      </div>
<!--    
  <div class="header">
    <h3> <a style="color:white "href="profile_student.php">View Profile</a></h3>
  </div>
  <div class="header">
    <h3> <a style="color:white "href="profile_student_update_int.php">Update Profile</a></h3>
  </div>
  <div class="header">
    <h3> <a style="color:white "href="apply_intern.php">Apply For Company</a></h3>
  </div>
  -->
</body>
</html>