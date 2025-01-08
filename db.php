<?php

$conn = new mysqli('localhost', 'root', '', 'tast_manager');
if ($conn->connect_error) {
  die("connection Failed:" . $conn->connect_error);
}
