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
 <title>Анкети дітей</title>
 <link rel="icon" type="image/png" href="img/logo.png">
 <link href="./css/jqvmap.css" rel="stylesheet">
 <script src="scripts/jquery-3.3.1.min.js "></script>
 <script src="https://yastatic.net/jquery/2.1.4/jquery.min.js"></script>
 <script src="./js/jqvmap.js"></script>
 <script src="./js/ukraine.js"></script>
 <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-

rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<?php
#підключення до бази даних
$link = mysqli_connect("localhost", "root", "", "students");
$link2 = mysqli_connect("localhost", "root", "", "adoption");
$region = $_POST['region'];
$sex = $_POST['sex'];
$forma = $_POST['forma'];
$family = $_POST['family'];
$agefrom = $_POST['agefrom'];
$ageto = $_POST['ageto'];
$request = mysqli_query($link2,"SELECT * FROM diti WHERE region = '$region' 
AND adoptionform = '$forma' AND family = '$family' AND Sex = '$sex'");
?>
 <header></header>
 <div id="home-section-1" class="movie-show-container">
 <h1 style="text-align: center">Анкети дітей</h1>
 <h3></h3>
 <?
 foreach ($request as $row) {
 if($row['age']>=$agefrom and $row['age']<=$ageto ){
 echo ' <div style="width: 80%;margin-left: 10%;border: 1px solid 
black; border-radius: 10px; margin-top: 3%;">';
 echo ' <h2 style="text-align: center; margin-bottom: 3%; 
margin-top: 3%; font-weight: bold;font-size: 2.5em; color: #4455a2; ">' . 
$row['name'] . '</h2>';
 echo ' <div style="width: 100%; display: flex; flex-wrap: 
wrap;" >';
 echo ' <img src="' . $row['img'] . '" style="margin-top: 
20px;margin-left: 15%; margin-bottom: 5%; width: 240px; height: 300px; 
border-radius: 50%;">';
 echo ' <h4 style="margin-top: 50px;margin-left: 27%; 
margin-bottom: 5%;"> Вік :<span style="font-weight: bold;font-size: 1.1em; 
color: #4455a2;">' . $row['age'] . ' років</span></h4>';
 echo ' <h4 style="margin-top: -290px;margin-left: 60%; 
margin-bottom: 5%;"> Стать : <span style="font-weight: bold;font-size: 1.1em; 
color: #4455a2;"> ' . $row['Sex'] . ' </span></h4>';
 echo ' <h4 style="margin-top: -230px;margin-left: 60%; 
margin-bottom: 5%;"> Характеристика :</h4>';
 echo ' <h4 style="margin-top: -190px;margin-left: 40%; 
margin-bottom: 5%; text-align: center">'. $row['info'] .'</h4>';
 echo ' </div>';
 echo ' <button type="button" class="btn btn-danger" 
onclick="redir(' . $row['id'] .');" style="width: 50%; margin-left: 42%; 
margin-top: -10%; margin-bottom: 2%;">Детальніше</button>';
 echo ' </div>';
 }
};
 ?>
 </div>
 <footer></footer>
 <script src="scripts/script.js "></script>
</body>
</html>
