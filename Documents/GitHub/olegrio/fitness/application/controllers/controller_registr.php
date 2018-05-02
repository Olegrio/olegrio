<?php
/**
 * Created by PhpStorm.
 * User: olegfomicev
 * Date: 20.03.2018
 * Time: 21:42
 */

class Controller_Registr extends Controller
{
    function action_index()
    {
        $this->view->generate('registr_view.php', 'template_view.php');
    }
}
$dbc = mysqli_connect('localhost','root','root','ikoregistr') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
        $query = "SELECT * FROM `signup` WHERE username = '$username'";
        $data = mysqli_query($dbc, $query);
        if(mysqli_num_rows($data) == 0) {
            $query ="INSERT INTO `signup` (username, password) VALUES ('$username', md5('$password2'))";
            mysqli_query($dbc,$query);
            echo '<script>window.location.href = "/general"</script>';
            mysqli_close($dbc);
            exit();
        }
        else {
            echo 'Логин уже существует';
        }

    }
}