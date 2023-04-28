<?php

@include 'config.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT book_id,book_name,book_title,edition,category,price,publish_date FROM Books';
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
.wrapper .main_content table{
  font-size: 20px;
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
        <div class="header">Books Record:</div>  
        <table border="1" style = "width: 100%">
		<tr>
            <th>Book_id</th>
			<th>Book Name</th>
			<th>Book Title</th>
			<th>Edition</th>
			<th>Category</th>
			<th>Price</th>
			<th>Publish Date</th>
		</tr>
		<?php while ($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $row['book_id']; ?></td>
				<td><?php echo $row['book_name']; ?></td>
				<td><?php echo $row['book_title']; ?></td>
				<td><?php echo $row['edition']; ?></td>
				<td><?php echo $row['category']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['publish_date']; ?></td>
			</tr>
		<?php } ?>
	</table>

    </div>
</div>
</body>
</html>
