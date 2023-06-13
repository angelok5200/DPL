<!DOCTYPE html>
<html lang="en">
<?php
 $id = $_GET['id'];
 $link = mysqli_connect("localhost", "root", "", "adoption");
 $Query = "SELECT * FROM diti WHERE id = $id";
 $movieImageById = mysqli_query($link,$Query);
 $row = mysqli_fetch_array($movieImageById)
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
 <title>Анкета дитини <?php echo $row['name']; ?></title>
 <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body style="background-color:#6e5a11;">
 <div class="booking-panel">
 <div class="booking-panel-section booking-panel-section1">
 <h1 style="text-align: center">Анкета дитини !</h1>
 </div>
 <div class="booking-panel-section booking-panel-section2" 
onclick="window.location.href='index.php';">
 <i class="fas fa-2x fa-times"></i>
 </div>
 <div class="booking-panel-section booking-panel-section3">
 <div class="movie-box">
 <?php
 echo '<img src="'.$row['img'].'" alt="">';
 ?>
 </div>
</div>
 <div class="booking-panel-section booking-panel-section4">
 <div class="title" style="border-radius: 25%; text-align:
center;"><?php echo $row['name']; ?></div>
 <div class="movie-information">
 <table>
 <tr>
 <td>РЕГІОН</td>
<td><?php echo $row['region']; ?></td>
 </tr>
<tr>
 <td>ВІК</td>
<td><?php echo $row['age']; ?> років</td>
 </tr>
 <tr>
 <td>СТАТЬ</td>
<td><?php echo $row['Sex']; ?></td>
 </tr>
<tr>
 <td>ХАРАКТЕРИСТИКА</td>
<td><?php echo $row['info']; ?></td>
 </tr>
<tr>
 <td>ФОРМА ВЛАШТУВАННЯ</td>
<td><?php echo $row['adoptionform']; ?></td>
 </tr>
<tr>
 <td>ДАТА НАРОДЖЕННЯ</td>
<td><?php echo $row['birthday']; ?></td>
 </tr>
<tr>
 <td>КОНТАКТНИЙ НОМЕР</td>
 <td><?php echo $row['number']; ?></td>
 </tr>
<tr>
 <td>НАЯВНІСТЬ БРАТІВ АБО СЕСТЕР</td>
<td><?php echo $row['family']; ?></td>
 </tr>
<tr>
 <td>МІСЦЕ ЗНАХОДЖЕННЯ</td>
<td><?php echo $row['place']; ?></td>
 </tr>
 </table>
 </div>
 <div class="booking-form-container">
 <form action="" method="POST">
 <button type="button" class="form-btn" style="width: 
500px;" onclick="redir(<?php echo $row['id']; ?>);">Взяти дитину у 
родину</button>
 </form>
 </div>
 </div>
 </div>
 <script src="scripts/jquery-3.3.1.min.js "></script>
 <script src="scripts/script.js "></script>
</body>
</html>
