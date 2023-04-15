<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registration.php" method="post">
        <div class="container">
            <h1>Форма регистрации</h1>
            <p>Заполните все поля</p>
            <hr>

            <label for="login">Логин</label>
            <input type="text" name="login" placeholder="Введите ваш логин">
            <br>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="">
            <br>
            <label for="tel">Телефон</label>
            <input type="tel" name="tel" id="">
            <br>
            <label for="pass1">Пароль</label>
            <input type="password" name="pass1">
            <br>
            <label for="pass2">Повторите пароль</label>
            <input type="password" name="pass2">
            <br><br>
            <button type="submit">Зарегистрироваться</button>
        </div>
    </form>
</body>
</html>