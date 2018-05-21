<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
<title>Калькулятор</title>
</head>
<body>
<?             /* приступаем непосредственно php коду */
function show()
{
  global $action;
  ?>
  <FORM method=Get action="calc.php" target="_blank">
/* target="_blank" - результат обработки формы будет выводится в новом окне */
  Первое число
  <input type="text" name="first">
  Второе число (Степень, процент)
  <input type="text" name="second">
  <select size="1" name="action">
    <option value="sum">Сложить</option>
    <option value="min">Вычесть</option>
    <option value="mult">Умножить</option>
    <option value="dev">Разделить</option>
    <option value="stepen">Возвести в степень</option>
    <option value="procent">Процент от числа</option>
    <option value="koren">Корень</option>
  </select>
  <br><input type="submit" value="Выполнить">
  </form>
  <?php 
}       //конец функции show()
</body>
  </html>
