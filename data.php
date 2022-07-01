<?php
require_once 'classes.php';

$publications = array();

// КОННЕКТ
$con = mysqli_connect("localhost", "feldmeow", "123", "testsite");
mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
// ЗАПРОС В БД
$result = mysqli_query($con, "SELECT * FROM publication");

// СОЗДАНИЕ МАССИВА ИЗ ЗАПИСЕЙ
while ($row = mysqli_fetch_array($result)) {
  $publications[] = new $row['type']($row);
}
