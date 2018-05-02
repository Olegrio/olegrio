
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="script" href="../../js/tempScript.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<div class="header">
    <div class="header__menu"><a href="#"></a></div>
    <div class="header__userInfo"><i class="fas fa-ellipsis-h fa-3x"></i></div>
    <div class="header__userAvatar"></div>



<input type="checkbox" id="hmt" class="hidden-menu-ticker">
<label class="btn-menu" for="hmt">
    <i class="menu fas fa-bars fa-3x"></i>
</label>
<ul class="hidden-menu">
    <li><a href=""><i class="far fa-clock"></i>таймер</a></li>
    <li><a href=""><i class="fas fa-book"></i>результаты</a></li>
    <li><a href=""><i class="far fa-chart-bar"></i>статистика</a></li>
    <li><a href=""><i class="fas fa-cog"></i>настройки</a></li>
</ul>
</ul>


</div>




<div class="box"><?php include 'application/views/'.$content_view; ?>
</div>
<div class="footer"></div>


</body>
</html>

