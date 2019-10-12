<?php
	if(isset($_POST['email']) && isset($_POST['senha'])) {

		$email  =  $_POST['email'];
		$senha =  $_POST['senha'];
		
		$connection = mysqli_connect('localhost', 'root', '', 'db_blog');

		$data = mysqli_query($connection, "SELECT * FROM `usuario` WHERE `email` = '{$email}' AND
		`senha` = '{$senha}'");

		$row_cnt = mysqli_num_rows($data);

		if($row_cnt == 1){
			$row = mysqli_fetch_array($data);
			$nome = $row['nome'];
			session_start();
			$_SESSION['nome'] = $nome;
			$_SESSION['email'] = $email;
			echo "success";
		}else{
			echo "failed";
		}
	}
?>