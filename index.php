<?php

@include 'config.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM Students';
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
  padding: 40px;
  font-size: 25px;
  padding-left: 70px;
  background-image: url("https://images.pexels.com/photos/114820/pexels-photo-114820.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
  background-size: cover;
   height: 100vh;
   width: 100%;
   background-position: center;
   position: relative;
   overflow: hidden;
   color: #fff;
}
.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

.wrapper .main_content p{
    width: 50%;
    padding: 40px;
    color: black;
    background-color: rgba(211, 211, 211, 0.7);
}
.wrapper .main_content span{
    font-size: 30px;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
    </style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>STUDENT LIBRARY</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="Student_record.php"><i class="fas fa-user"></i>Student Report</a></li>
            <li><a href="Book_record.php"><i class="fas fa-address-card"></i>Book Report</a></li>
            <li><a href="Add_book.php"><i class="fas fa-project-diagram"></i>Add Books</a></li>
            <li><a href="Add_student.php"><i class="fas fa-blog"></i>Add Student</a></li>
            <li><a href="issued.php"><i class="fas fa-address-book"></i>Issued</a></li>
            <li><a href="published.php"><i class="fas fa-map-pin"></i>Published</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <!-- <img src="images/library.jpg" height="100%" width="100%" alt=""> -->
        <p><b>
        <span>WELCOME TO DIGITAL STUDENT LIBRARY DATABASE!</span><br><br><br>

            Our system is designed to help you manage all aspects of your library in one place. Whether you are a student, a staff member, or a librarian, our system has everything you need to keep your library organized and efficient.<br><br><br>

            With our system, you can easily manage student records, including their borrowing history, fines, and reservations. You can also keep track of your book collection, including details such as title, author, publisher, and availability. Additionally, our system allows you to manage your publisher information, making it easy to keep track of all the books you have ordered from various publishers.<br><br><br>

            Our system is also designed to help you manage your library staff. You can easily add, edit, and remove staff members, assign roles and permissions, and track their performance.<br><br><br>

            Our easy-to-use interface makes it simple to navigate through our system, and our advanced search functionality ensures that you can quickly find the information you need. Additionally, our system is fully customizable, allowing you to tailor it to your library's specific needs.
        </b></p>
    </div>
</div>
</body>
</html>