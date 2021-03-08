<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>php веб сайт</title>
</head>

<body>
    <?php require 'blocks/header.php' ?>
    </header>
    <div class="container mt-5">
        <h3 class='mb-5'>Наши статьи</h3>
        <div class='d-flex flex-wrap'>
            <?php
            for ($i = 0; $i < 5; $i++) :
            ?>
                <div class="card mb-4 shadow-sm">
                    <?php
                    if($_COOKIE['user'] == ''):
                    ?>
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Guitar</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/<?php echo ($i + 1) ?>.jpg" class='img-thumbnail'>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                    </div>
                    <?php else:?>
                    <p>Привет <? $_COOKIE['user']?>.чтобы выйти нажмите <a href="exit.php">сюда</a></p>

                    <?php endif; ?>
                </div>
            <?php endfor ?>
        </div>
    </div>
    <?php require 'blocks/footer.php' ?>
</body>

</html>