<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/style.css">

    <title>Товары</title>

</head>
<body>
<div class="tovari-top">

    <h2>Товары</h2></div>
<div class="tovar">



    <?

    $pdo = new PDO('mysql:host=localhost;dbname=ikoregistr', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $kk = $_POST['kkk'];

    $sql = "SELECT * FROM tovar WHERE category = $kk";
    $q = $pdo->query($sql);


    while($row = $q->fetch(PDO::FETCH_ASSOC)) {


//        $plus_iz= $_POST['$bt'];
//
//        $sqlTwo = "INSERT INTO izbrannoe_tovar (user_id,id_tovar) VALUES ($ui,$ti)";
//        $qq = $pdo->query($sqlTwo);

//        if (isset($_POST['$bt'])){
//            $userid = mysqli_real_escape_string($dbc, trim($_POST['$ui']));
//            $tovarid = mysqli_real_escape_string($dbc, trim($_POST['$ti']));
//
//            $query ="INSERT INTO `izbrannoe_tovar` (user_id, id_tovar) VALUES ('$userid' ,'$tovarid' )";
//            mysqli_query($dbc,$query);
//
//        };

        if (isset($_POST['$bt'])) {
            $bt = 'button-plus-izbrannoe' . $row["id_tovar"];
            $ui = 'userid' . $row["id_tovar"];
            $ti = 'tovarid' . $row["id_tovar"];

            $plus = "INSERT INTO `izbrannoe_tovar` (`user_id`, `id_tovar`) VALUES ($ui, $ti)";
            $p = $pdo->query($plus);
        };
        if (!empty($_COOKIE['username'])) {
            $ui = $_COOKIE['username'];
        } else {
            $ui = 'авторизуйтесь';

        };


        echo "<div class='tovar-kontainer'><img class='img-tovar' src='" . $row["url_img"] . "' alt='image'><p>" . $row["information"] . "</p>
<p>Цена:" . $row["price"] . "</p><br><br><button  style='display: none' class='add-to' user-id='" . $ui . "' data-id='" . $row['id_tovar'] . "'> Добавить в избранное</button><br><a href='"
            . $row["url_tovar"] . "' target=\"_blank\"><img class='img-store' src='../../images/store.png' alt='store'></a></div>";
    }; ?>



</div>

<script>


    jQuery(document).ready(function() {
        jQuery(".add-to").bind("click", function () {
            // добавляем в избранное

            var id_tovar = jQuery($(this).attr('data-id'));
            console.log(id_tovar);
            var id_user = jQuery($(this).attr('user-id'));
            console.log(id_user);


            jQuery.ajax({
                url: "/for_db.php",
                type: "POST",
                data: {id_tovar: id_tovar, id_user: id_user}, // Передаем данные для записи
                dataType: "json",
                success: alert('Добавлено')
            });
        });
    });





</script>









</body>
</html>