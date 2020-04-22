<?php
session_start();
include("dothing.php");
include("db_connection.php");
echo"                        ";
echo "Hello ".$_SESSION['nome']." This is your home page, you are registered for: " .$_SESSION['data'];

?>
<html>
<body>
	<br><br>
	<textarea id="txta" rows="20" cols="100">
		COMPANY NAME srl
		<?php
		echo='$piva'"<br>";
		echo='$address'"<br>";
		echo='$email'"<br>";
		?>
		Phone Number:
	</textarea>


	<br><br>
<button><a href="logout.php">logout</a></button>
</body>

</html>
