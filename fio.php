<!DOCTYPE html>
<html lang="en">
<?php 

$color = $_GET["color"];
$textcolor = $_GET["color_text"];
$type = $_GET["type"];
$method = $_GET["method"];



 

if ($color == "0") { 

$color_param = "red"; 

} 

if ($color == "1") { 

$color_param = "aqua"; 

} 

if ($color == "2") { 

$color_param = "pink"; 

} 
if ($textcolor == "0") { 

    $textcolor_param = "black"; 
    
    } 
    
    if ($textcolor == "1") { 
    
    $textcolor_param = "red"; 
    
    } 
    
    if ($textcolor == "2") { 
    
    $textcolor_param = "aqua"; 
    
    } 


?> 

<head>
    <meta charset="utf-8">
    <style>
        p {
            margin-top: 0.5em;
            margin-bottom: 1em;
        }

        .svg1 {
            transform: rotate(-90deg);
        }
        .ground{
            background-color: <?= $color_param ?>;
        }
        
    </style>

</head>

<body class="ground">
<h3>Форма ввода данных</h3>
<form method="POST" action = "output.php">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <select name="prep">
	<option>Начальный</option>
	<option>Средний</option>
	<option>Продвинутый</option>
</select>

    <!-- <div class="dropdown">
<button class="dropbtn">Social Media</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>

</div>
</div> -->
    <!-- <div class="dropdown">
    <button onclick="myFunction()" >Выпадающий</button>
    <div id="myDropdown" name="prep" size="3" class="dropdown-content">
		<a href="#">Начальный</a>
		<a href="#">Средний</a>
		<a href="#">Продвинутый</a>
</div>
</div> -->
</p>
    
    <input type="submit" value="Отправить">
</form>
    <p>
    <?php
        if($type == "graph" && $method == "canvas"){
            ?>
        <h2>Инициалы с помощью canvas графическими примитивами</h2>
        <canvas id="canvas"></canvas>
        <?php
    }
    ?>
        </p>
    <p>
        <?php
        if($type == "text" && $method == "canvas"){
            ?>
    <h2>Инициалы с помощью cnavas выводом текста</h2>
    <canvas height='100' width='300' id='myCanvas'  ></canvas>
    <?php
    }
    ?>
    </p>
    <p>
    <?php
        if($type == "graph" && $method == "svg"){
            ?>
        <h2>Инициалы с помощью svg графическими примитивами</h2>
        <svg height="100" width="180">
            <circle cx="100" cy="50" r="45" stroke="<?= $textcolor_param ?>" stroke-width="4" fill="<?= $color_param ?>" />
            <line x1="170" y1="0" x2="170" y2="90" stroke-width="4" stroke="<?= $textcolor_param ?>" />
    
        </svg>
        <svg class="svg1" height="100" width="150">
            <line x1="35" y1="7" x2="127" y2="7" stroke-width="4" stroke="<?= $textcolor_param ?>" />
            <path d="M35,10 a1,1 0 0,0 90,0" stroke="<?= $textcolor_param ?>" stroke-width="4" fill="<?= $color_param ?>" />
        </svg>
        <?php
    }
    ?>
    </p>
    <p>
    <?php
        if($type == "text" && $method == "svg"){
            ?>
    <h2>Инициалы с помощью svg выводом текста</h2>
    <svg height="100" width="300">
        <text x="20" y="100" font-size="100" fill="<?= $textcolor_param ?>">O I D</text>
    </svg>
    <?php
    }
    ?>
    </p>
    
    
    <script>
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        ctx.font = "100px Arial";
        ctx.strokeStyle = "<?= $textcolor_param ?>";
        ctx.fillStyle = "<?= $textcolor_param ?>";
        ctx.fillText("O I D", 10, 100);
    </script>
    <script>


        var canvas = document.getElementById('canvas');
        var obCanvas = canvas.getContext('2d');

        obCanvas.beginPath();
        obCanvas.arc(165, 75, 50, -4.7, -1.55, Math.PI, false);
        obCanvas.lineWidth = 4;
        obCanvas.strokeStyle = '<?= $textcolor_param ?>';
        obCanvas.moveTo(165, 125);
        obCanvas.lineTo(165, 25);
        obCanvas.stroke();
        obCanvas.closePath();
        obCanvas.beginPath();
        obCanvas.lineWidth = 4;
        obCanvas.strokeStyle = '<?= $textcolor_param ?>';
        obCanvas.moveTo(125, 125);
        obCanvas.lineTo(125, 25);
        obCanvas.stroke();
        obCanvas.closePath();
        obCanvas.beginPath();
        obCanvas.arc(50, 75, 50, 0, 2 * Math.PI, false);
        obCanvas.lineWidth = 4;
        obCanvas.strokeStyle = '<?= $textcolor_param ?>';
        obCanvas.stroke();

    </script>

</body>

</html>