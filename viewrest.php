<?php


if (!$conn)
{
  die("Error connection: ".sqlsrv_errors());
}
  echo "Connection to Db: Success!";
?>
