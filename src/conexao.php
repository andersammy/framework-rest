<?php

function cria_manolo($conn, $sNome){
	$stmt = $conn->prepare('insert into tbpessoa (dsnome) values (?)');
	$stmt->bind_param('s',$dsnome);
	$dsnome = $sNome;
	$oRes = $stmt->execute();
	$stmt->close();
	return $oRes;
}

$conn = mysqli_connect('127.0.0.1','root','vm123456','teste');

$bCria = isset($_GET['cria']);
if($bCria){
	if(cria_manolo($conn,'Manolo')){
		echo 'criou';
	} else {
		echo 'pau';
	}
	echo '<br>';
}


$oRes = mysqli_query($conn,'select * from tbpessoa');
echo '<table>';
while($obj = mysqli_fetch_object($oRes)){
    echo '<tr><td>';
    echo $obj->cdpessoa;
    echo '</td><td>';
    echo $obj->dsnome;
    echo '</td></tr>';
}
echo '</table>';

mysqli_free_result($oRes);

mysqli_close($conn);


?>