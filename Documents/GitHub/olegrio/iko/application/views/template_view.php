<? require_once 'author_view.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="script" href="../../js/tempScript.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>

<div class="topMenuDiv">
<ul class="topMenuUl">
    <li class="topMenuLi"><a class="topMenuA" href="/general">Главная</a></li>
    <li class="topMenuLi"><a class="topMenuA" href="/oproekte">О проеке</a></li>
    <li class="topMenuLi"><a class="topMenuA" href="/kategorii">Категории</a></li>
    <? if(!empty($_COOKIE['username'])) {
    ?>
    <li class="topMenuLi"><a class="topMenuA" href="/izbrannoe">Избранное</a></li>
    <?} ?>



</ul>
</div>
<div class="box"><?php include 'application/views/'.$content_view; ?>
</div>
<div class="footer">


    <h3>IKO</h3>
    <p>made in spb - mart 2018</p>

</div>


</body>
</html>

