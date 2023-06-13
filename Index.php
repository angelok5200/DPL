<?php
session_start();
if($_SESSION['itlogin'] == ""){
 header('Location: /auth.php');
}else{
 $login = $_SESSION['itlogin'];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
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
 <title>Diploma Adoption</title>
 <link rel="icon" type="image/png" href="img/logo.png">
 <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css
" integrity="sha384-
xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
crossorigin="anonymous">
</head>
<body>
 <?php
 $link = mysqli_connect("localhost", "root", "", "adoption");
 $sql = "SELECT * FROM movietable";
 ?>
 <header></header>
 <div id="home-section-1" class="movie-show-container">
 <h1 style="text-align: center">Візьміть дитину у родину</h1>
 <h3 style="text-align: center">Оберіть критерії, за якими ви шукаєте 
дитину</h3>
 <form action="ankets.php" method="post">
 <div style="width: 80%; margin-top: 8%; height: 400px; margin-left: 
10%; display: flex;flex-wrap: wrap; ">
 <select class="select-css" style="width: 30%; margin-top: 15px; 
margin-left: 15%; height: 50px;" name="region">
 <option>Оберіть регіон</option>
<option>Львівська область</option>
 <option>Дніпропетровська область</option>
<option>Київська область</option>
<option>Донецька область</option>
<option>Одеська область</option>
 </select>
<select class="select-css" style="width: 30%; margin-top: 15px; 
margin-left: 10%; height: 50px;" name="sex">
 <option>Оберіть стать</option>
<option>Хлопчик</option>
<option>Дівчинка</option>
 </select>
 <select class="select-css" style="width: 30%; margin-top: -70px; 
margin-left: 15%; height: 50px;" name="forma">
 <option>Оберіть форму опіки</option>
 <option>Усиновлення</option>
<option>Опіка/піклування</option>
 <option>Прийомна сім'я</option>
 <option>Дитячий будинок сімейного типу</option>
 </select>
 <select class="select-css" style="width: 30%; margin-top: -70px; 
margin-left: 10%; height: 50px;" name="family">
 <option>Наявність братів та сестер</option>
 <option>Так</option>
<option>Ні</option>
 </select>
 <input class="form-control" style="width: 30%; margin-top: -90px; 
margin-left: 15%; height: 50px;" placeholder="Вік від:" name="agefrom" 
required>
 <input class="form-control" style="width: 30%; margin-top: -90px; 
margin-left: 10%; height: 50px;" placeholder="Вік до:" name="ageto" required>
 <button type="submit" class="btn btn-warning" style="margin-top: 
-85px; height: 40px; width: 300px; margin-left: 37%;" ><span> Шукати анкети 
</span></button>
 </div>
 </form>
 </div>
 <div id="home-section-2" class="services-section">
 <h3 style="text-align: center; margin-top: -70px; margin-bottom: 
100px;" >Як працювати з сервісом ?</h3>
 <div class="services-container" style="margin-left: 7.5%;">
 <div class="service-item">
 <div class="service-item-icon">
 <i class="fas fa-4x fa-video"></i>
 </div>
<h2>1. Оберіть критерії</h2>
 <p>Оберіть критерії, за якими ви шукаєте дитину</p>
 </div>
 <div class="service-item">
 <div class="service-item-icon">
 <i class="fas fa-4x fa-credit-card"></i>
 </div>
 <h2>2. Оберіть дитину</h2>
<p>Оберіть анкету дитини, яка вас цікавить</p>
 </div>
 <div class="service-item">
 <div class="service-item-icon">
 <i class="fas fa-4x fa-theater-masks"></i>
 </div>
<h2>3. Заповніть заявку</h2>
<p>Заповніть заявку на те , щоб забрати обрану дитину у 
родину</p>
 </div>
 <div class="service-item"></div>
 </div>
 </div>
 <footer></footer>
 <script src="scripts/jquery-3.3.1.min.js "></script>
 <script src="scripts/script.js "></script>
</body>
</html>
