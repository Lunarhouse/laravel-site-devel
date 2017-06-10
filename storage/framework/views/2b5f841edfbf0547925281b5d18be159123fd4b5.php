<html>
<head>
    <title>Ошибка 404</title>
    <link href=<?php echo e(asset('css/404.css')); ?> rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">

        <div id="image">
            <img src=<?php echo e(asset('images/errors/404.png')); ?> alt="404" height="200" width="200" />
        </div>

        <div id="content">

            <p>Мы сожалеем, но у нас нет страницы, которую вы ищете.</p>
            <p>Почему?</p>

            <div class="list">
                <ol>
                    <li>Ссылка, по которой Вы пришли, неверна.
                    <li>Вы неправильно указали путь или название страницы.
                    <li>Страница была удалёна со времени Вашего последнего посещения.
                </ol>
            </div>

            <p>Перейти на:</p>

            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Главную страницу сайта.</a>
            </ul>
        </div>
    </div>
</body>
</html>