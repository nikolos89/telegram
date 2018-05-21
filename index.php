<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
<title>Калькулятор</title>
</head>
<body>
  <?php            
function show()
{
  global $action;
  ?>
  <FORM method=Get action="calc.php" target="_blank">

  <input type="text" name="first">

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
  } 
?>
    
</body>
  </html>
