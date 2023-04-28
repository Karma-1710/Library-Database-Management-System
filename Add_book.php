<?php
    @include 'config.php';

    if(isset($_POST['submit'])){
      $book_id = mysqli_real_escape_string($conn, $_POST['book_id']);    
      $book_name = mysqli_real_escape_string($conn, $_POST['book_name']);    
      $book_title = mysqli_real_escape_string($conn, $_POST['book_title']);
      $edition = mysqli_real_escape_string($conn, $_POST['edition']);
      $category = mysqli_real_escape_string($conn, $_POST['category']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);
      $publish_date = mysqli_real_escape_string($conn, $_POST['publish_date']);

      $insert = "INSERT INTO Books(book_id, book_name, book_title, edition, category, price, publish_date) VALUES('$book_id', '$book_name', '$book_title', '$edition', '$category', '$price', '$publish_date')";
      mysqli_query($conn, $insert);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
  margin-left: 200px;
  padding: 30px;
  font-size: 25px;
  padding-left: 70px;
}
.wrapper .main_content img{
  margin-left: 70px;
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
            <li><a href="Add_book.php"><i class="fas fa-project-diagram"></i>Add Book</a></li>
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
        <h1>EDIT BOOK RECORD!</h1>
        <img src="images/icon/book.png" alt="" height="300px" width="300px" style="margin-top: 30px;">
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3" method="post" action="Add_book.php">
      <input type="hidden" name="action" value="insert">
        <div class="col-md-4">
            <label class="form-label">BOOK ID</label>
            <input type="text" class="form-control" name="book_id" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">BOOK NAME</label>
            <input type="text" class="form-control" name="book_name" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">BOOK TITLE</label>
            <div class="input-group">
              <input type="text" class="form-control" name="book_title" required>
            </div>
          </div>
        <div class="col-md-6">
          <label class="form-label">EDITION</label>
          <input type="text" class="form-control" name = "edition">
        </div>
        <div class="col-md-6">
          <label class="form-label">CATEGORY</label>
          <input type="text" class="form-control" name="category">
        </div>
        <div class="col-md-6">
          <label class="form-label">PRICE</label>
          <input type="text" class="form-control" name="price">
        </div>
        <div class="col-md-6">
          <label class="form-label">PUBLISH DATE</label>
          <input type="date" class="form-control" name = "publish_date" value="YYYY-MM-DD" min="YYYY-MM-DD" max="YYYY-MM-DD">
        </div>
        <div class="col-12">
          <button type="submit" name = "submit" class="btn btn-primary">INSERT</button>
        </div>
      </form>
   </section>
</div>
</body>
</html>
