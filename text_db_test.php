<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<!--<tr>
		<td>1</td>
		<td>Коля</td>
		<td>23</td>
		<td>400</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Вася</td>
		<td>24</td>
		<td>500</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Петя</td>
		<td>25</td>
		<td>600</td>
	</tr>-->
	<?php 
    $host = "test";
    $user = "root";
    $password = "";
    $db_name = "test";
      // СОЕДИНЯЕМСЯ
    $link = mysqli_connect($host, $user, $password, $db_name);
    $query = "SELECT * FROM workers";
    $result = mysqli_query($link, $query) or die( mysqli_error($link));
    for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $result  = "";
    foreach ($data as $elem) {
			$result .= '<tr>';
			
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . 
				$elem['salary'] . '</td>'; 
			
			$result .= '</tr>';
		}
		
		echo $result;
    ?>
</table>
</body>
</html>

array(6)
 { [0]=> array(4)
 { ["id"]=> string(1) 
     "1" ["name"]=> string(8) "Дима" ["age"]=> string(2) "23" ["salary"]=> string(3) "400" } [1]=> array(4) { ["id"]=> string(1) "2" ["name"]=> string(8) "Петя" ["age"]=> string(2) "25" ["salary"]=> string(3) "500" } [2]=> array(4) { ["id"]=> string(1) "3" ["name"]=> string(8) "Вася" ["age"]=> string(2) "23" ["salary"]=> string(3) "500" } [3]=> array(4) { ["id"]=> string(1) "4" ["name"]=> string(8) "Коля" ["age"]=> string(2) "30" ["salary"]=> string(4) "1000" } [4]=> array(4) { ["id"]=> string(1) "5" ["name"]=> string(8) "Иван" ["age"]=> string(2) "27" ["salary"]=> string(3) "500" } [5]=> array(4) { ["id"]=> string(1) "6" ["name"]=> string(12) "Кирилл" ["age"]=> string(2) "28" ["salary"]=> string(4) "1000" } }


























