<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO UserCredentials (username, password) VALUES(?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$username, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
?>