<?php


if (!$conn)
{
  die("Error connection: ".sqlsrv_errors());
}
  //echo "Connection to Db: Success!";
  $sql= "SELECT * FROM [dbo].[restaurant]";
  $getResults = sqlsrv_query($conn, $sql);
  if ($getResults == FALSE)
  {
    die(sqlsrv_errors());
  }
  echo "<table border = '1'>";
  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
  {
  echo "<tr>";
  echo "<td>". $row['restaurant_id'] . "</td>";
  echo "<td>". $row['restaurant_name'] ."</td>";
  echo "<td>". $row['restaurant_address'] . "</td>";
  echo "<td>". $row['restaurant_phone'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
  sqlsrv_free_stmt($getResults)
?>
