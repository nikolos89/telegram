<?php
// Функция вывода формы ввода
function show_form()
{
echo '<html>';
echo '<head>';
echo '<title>Калькулятор</title>';
echo '</head>';
echo '<body>';
echo '<form action="sum1.php" method="post">';
echo '<input type="text" name="a"/>';
 
echo '<input type="submit" name="oper" value= "+" />';
echo '<input type="submit" name="oper" value= "-" />';
echo '<input type="submit" name="oper" value= "*" />';
echo '<input type="submit" name="oper" value= "/" />';
 
echo '<input type="text" name="b" />';
echo '<input type="submit" value="=" />';
 
echo '</form>';
echo '</body>';
echo '</html>';
}
// Функция вычисления результата.
//function count_result($oper,$a, $b)
//{
$oper = $_POST['oper'];
if ($oper == "+")
{
$result = $a + $b;
 
}
else if ($oper == "-")
{
$result = $a - $b;
 
}
else if ($oper == "*")
{
$result = $a * $b;
 
}
else if ($oper == "/")
{
if ($b != 0)
{
$result = $a / $b;
 
}
else
{ 
echo "на ноль делить нельзя!";
}
}
 
//}
 
// Функция вывода результата.
function show_result($a, $b)
{
echo '<html>';
echo '<head>';
echo '<title>Сумматор</title>';
echo '</head>';
echo '<body>';
echo '<form action="sum1.php" method="get">';
echo '<input type = "text" name = "a" value = '.$_POST['a'].'>';
echo '<input type="submit" value="+" />';
echo '<input type="submit" value="-" />';
echo '<input type="submit" value="*" />';
echo '<input type="submit" value="/" />';
 
echo '<input type = "text" name = "b" value = '.$_POST['b'].'>';
echo '<input type="submit" value="=" />';
echo $result;
echo '<br>';
echo '<a href="sum1.php">Хочу продолжить вычисление</a>';
echo '</p>';
echo '</body>';
echo '</html>';
}
 
// Точка входа.
// Показываем результат операции или форму ввода.
if (isset($_POST['a']) && isset($_POST['b']))
{
show_result($_POST['a'], $_POST['b'],$oper);
}
else
{
show_form();
}
 
?>
