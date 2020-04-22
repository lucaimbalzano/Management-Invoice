<?php
session_start();

if ($_SESSION['nome'] != "$nome")
		{
  header('refresh:1; URL=http://imbalzano/Management_Invoice/menu.html');
		}

else {
	header("Location: Home.php");
	}

?>
