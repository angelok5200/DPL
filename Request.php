<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style/styles.css">
 <link rel="stylesheet" 
href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
integrity="sha384-
fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
crossorigin="anonymous">
 <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-
rc.0/dist/css/select2.min.css" rel="stylesheet" />
 <title>Doctor's Appointment</title>
 <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
<?php 
 $link = mysqli_connect("localhost", "root", "", "adoption");
?>
 <header></header>
<div>
<div mt="150px" class="container">
 <div class="row">
 <div class="col-3"></div>
 <div class="col-6">
   <h1><center>Якщо ви бажаєте взяти обрану дитину у родину, будь 
ласка, заповніть форму</center></h1><br>
 <form action="" method="POST" >
 <div class="box-body">
 <div class="step_1">
 <div class="form-group">
 <label for="First_name">Ім'я :-</label>
 <input type="text" class="form-control first_name 
" name="name" required>
 </div><br>
 <div class="form-group">
 <label for="Second_name">Прізвище:-</label>
 <input type="text" class="form-control 
second_name" name="sname" required>
 </div><br>
 <div class="form-group">
 <label for="birthday">Вік:-</label>
 <input class="form-control birthday" required 
type="text" name="company" >
 </div><br>
 <div class="form-group">
 <label for="subject">Сімейний стан:-</label>
 <input class="form-control subject" required 
type="text" name="position" >
 </div><br>
 <div class="form-group">
 <label for="country">Місто:-</label>
 <select class="form-control country" 
name="country" id="country" >
 <?php
$arr = 
array("Київ","Дніпро","Одеса","Харків","Львів","Полтава", "Херсон");
 foreach ($arr as &$value) {
 echo "<option>".$value."</option>";
 }?>
 </select>
 </div><br>
 <div class="form-group">
 <label for="phone">Телефон:-</label>
 <input class="form-control phone" type="tel" 
placeholder="+(099) 999 99 99)" name="phone" >
 </div><br>
 <div class="form-group">
 <label for="email">email :-</label>
 <input class="form-control email" required 
type="text" name="email" >
</div><br>
 <div class="box-footer">
 <button type="submit" name="submit" 
value="submit" class="btn btn-danger">Надіслати</button>
 </div>
 </div>
 </div>
<?php
   if(isset($_POST['submit'])){
 $insert_query = "INSERT INTO 
 franchase ( name,
 sname,
company,
 position,
 country,
phone,
email)
 VALUES ( '".$_POST["name"]."',
 '".$_POST["sname"]."',
 '".$_POST["company"]."',
 '".$_POST["position"]."',
 '".$_POST["country"]."',
 '".$_POST["phone"]."',
 '".$_POST["email"]."')";
 mysqli_query($link,$insert_query);
 echo "<script>alert('Після розгляду заявки менеджер 
зв\'яжеться з вами !');</script>";
 }
 ?>
 </form>
 </div>
 </div>
</div>
</div>
<footer></footer>
 <script src="scripts/jquery-3.3.1.min.js "></script>
 <script src="scripts/owl.carousel.min.js "></script>
 <script src="scripts/script.js "></script>
</body>
</html>
