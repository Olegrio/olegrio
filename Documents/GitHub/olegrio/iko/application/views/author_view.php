<?php $dbc = mysqli_connect('localhost','root','root','ikoregistr');
if(!isset($_COOKIE['user_id'])) {
    if(isset($_POST['submit-author'])) {
        $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
        $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
        if(!empty($user_username) && !empty($user_password)) {
            $query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = md5('$user_password')";
            $data = mysqli_query($dbc,$query);
            if(mysqli_num_rows($data) == 1) {
                $row = mysqli_fetch_assoc($data);
                setcookie('user_id', $row['user_id'], time() + 60*60*24*30);
                setcookie('username', $row['username'], time() + 60*60*24*30);

            }
            else {
                echo '<p style="text-align: right">Извините, вы должны ввести правильные имя пользователя и пароль</p>';
            }
        }
        else {
            echo '<p style="text-align: right">Извините вы должны заполнить поля правильно</p>';
        }
    }
}
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="form-author" id="form_author_id">
    <section>
        <?php
        if(empty($_COOKIE['username'])) {
            ?>
            <form   action="/kategorii" method="POST">
                <label for="username">Логин:</label>
                <input type="text" name="username"><br>
                <label for="password">Пароль:</label>
                <input type="password" name="password"><br>
                <button type="submit" name="submit-author">Вход</button>
            </form>
            <form  method="post" action="/registr"><button>Регистрация</button></form>
            <?php
        }
        else {
            ?>
            <p><a href="/exit">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
            <?php
        }
        ?>
    </section>
</div>
<!------------------------- end autarisation form-------------------------------->



