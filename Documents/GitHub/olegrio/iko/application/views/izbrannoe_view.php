<?if(!empty($_COOKIE['username'])) {
?>
<!DOCTYPE html><html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/tempScript.js"></script>
    <title>Избранное</title>
</head>
<body>

<div class="izbrannoe-top">
    <h2>Избранное</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Asperiores cupiditate odio perspiciatis sint voluptatibus.
    Amet cum dolorum incidunt nesciunt officiis!</p>
</div>
<div class="izbrannoe-center">
    <div class="row-one">
        <div class="col-one"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, itaque!</p></div>
        <div class="col-two"></div>
        <div class="col-three"></div>
</div>
<div class="izbrannoe-bottom"></div>


    <?} else  echo '<script>window.location.href = "/registr"</script>'?>
</body>

</html>

