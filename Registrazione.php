<?php
session_start();/Start session
include("db_connection.php");//add function
//take all values about sign in
	$nome=$_POST['nome'];
	$cognome=$_POST['cognome'];
	$piva=$_POST['piva'];
	$onepassword=$_POST['onepassword'];
	$twopassword2=$_POST['twopassword'];
	$address=$_POST['address'];
	$email=$_POST['email'];

  if($onepassword == $twopassword){//comparison password
  		echo "The passwords aren't equivalent, try again";
        }
        else {

               $sql1= "SELECT * FROM users WHERE nome='$nome' AND cognome='$cognome'";//view about all names and surname are alreasy inserted

                  $res=mysqli_query($conn,$sql1);//execute the query
                  $riga=mysqli_num_rows($res);//it move for row

                  if ($riga==0){

		  $data=date('y-m-d');//it establishment the format about the date

                      $sql = "INSERT INTO users (nome,cognome,piva,password,email,address,data)
                      VALUES ('$nome','$cognome','$piva','$onepassword','$email''$address',, CURDATE() )";//insert the various data in the right table


                                if ($conn->query($sql)) {
                                    echo "the Sign in had successfull! ";

                                    $_SESSION['nome'] = $nome;
                                    $_SESSION['data'] = $data;
                                    header('refresh:1; URL=https://github.com/lucaimbalzano/Management-Invoice/userhomepage.php');
                                  }
                                  else{
                                  echo "Query failed";
                                  }
                         }

                   else{
                   echo "User already registered";
				   header('refresh:1; URL=https://github.com/lucaimbalzano/Management-Invoice/Home.php');

                  }

           }
?>
