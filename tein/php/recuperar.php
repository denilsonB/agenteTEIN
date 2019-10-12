<?php
	if(isset($_POST['email']) ) {

		$email  =  $_POST['email'];

		$connection = mysqli_connect('localhost', 'root', '', 'db_blog');

		$data = mysqli_query($connection, "SELECT * FROM `usuario` WHERE `email` = '{$email}'");

		$row_cnt = mysqli_num_rows($data);

		if($row_cnt == 1){
			$row = mysqli_fetch_array($data);
			$senha = $row['senha'];
			echo "success ". $senha;
		}else{
			echo "failed";
		}
	}
?>