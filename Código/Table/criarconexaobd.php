<?php
function criaconexaobd() {
	$bd = new PDO ('mysql:host=localhost;dbname=projetofinal;charset=utf8', 'projetofinal', '1234');
	$bd ->setAttribute (PDO :: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $bd;
}
?>
