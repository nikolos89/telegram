<?php
 
// Функция вывода формы ввода
function show_form()
{
echo '<html>';
echo '<head>';
echo '<title>Калькулятор</title>';
echo '</head>';
echo '<body>';
echo '<form action="#" method="post">';
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
 
 
 
 
// Функция вывода результата.
function show_result($a, $b , $oper) 
{
 
 $result = null;
 if ($oper == "+")       {  $result = $a + $b;  }
 else if ($oper == "-")  {  $result = $a - $b;  }
 else if ($oper == "*")  {  $result = $a * $b;  }
 else if ($oper == "/")  {  $result = $b != 0 ? $a / $b : "на ноль делить нельзя!"; }
echo '<html>';
echo '<head>';
echo '<title>Сумматор</title>';
echo '</head>';
echo '<body>';
echo '<form action="#" method="get">';
echo '<input type = "text" name = "a" value = '.$a.'>';
echo '<input type="submit" name="oper" value= "+" />';
echo '<input type="submit" name="oper" value= "-" />';
echo '<input type="submit" name="oper" value= "*" />';
echo '<input type="submit" name="oper" value= "/" />';
 
echo '<input type = "text" name = "b" value = '.$b.'>';
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
if (!empty($_POST['oper']) && !empty($_POST['a']) && !empty($_POST['b']))
{
show_result($_POST['a'], $_POST['b'],$_POST['oper']);
}
else
{
show_form();
}
?>
