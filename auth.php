<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Форма регистрации</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
   <?php require 'blocks/header.php' ?>
   <div class="row"></div>
      <div class="col"></div>
         <div class='container mt-5' id='auth'>
         <h1>Форма регистрации</h1>
         <form action="regcheck.php" method="post">
            <input type="text" class='form-control' name='login' id='login' placeholder='введите ваш логин'><br>
            <input type="text" class='form-control' name='name' id='name' placeholder='введите ваш имя'><br>
            <input type="password" class='form-control' name='pass' id='pass' placeholder='введите ваш пароль'><br>
            <button class='btn btn-success' type="submit">Регистрация</button>
         </form>
      </div>
      <div class="col"></div>
         <div class='container mt-5' id='auth'>
         <h1>Форма авторизации</h1>
         <form action="logcheck.php" method="post">
            <input type="text" class='form-control' name='login' id='login' placeholder='введите ваш логин'><br>
            <input type="password" class='form-control' name='pass' id='pass' placeholder='введите ваш пароль'><br>
            <button class='btn btn-success' type="submit">Авторизация </button>
         </form>
      </div>
      </div>

</body>

</html>