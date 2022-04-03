<!DOCTYPE html>
<html lang="en">
<?php 

$name = "не определено";
$age = "не определен";
$lvl_prep = "не определен";

if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}
if(isset($_POST["age"])){
  
    $age = $_POST["age"];
}
if(isset($_POST["prep"])){
  
    $lvl_prep = $_POST["prep"];
}
echo "Имя: $name <br> Возраст: $age <br> Уровень подготовки: $lvl_prep";
?>

<body>

<input type="button" onclick="history.back();" value="Назад"/>

</body>
</html>