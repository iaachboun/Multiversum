<?php
session_start();

$item = array(
	array('Film 1', 'Dit is de eerste film', '100', '1'),
	array('Film 2', 'Dit is de tweede film', '200', '3'),
	array('Film 3', 'Dit is de derde film', '300', '6')
);


echo '<h1>Webshop oefening</h1>';

if(isset($_GET['actie']) && isset($_GET['id']) && $_GET['id'] != '' ){
	if(isset($_SESSION['bestel'])){
		$bestelItem = explode('[@]', $_SESSION['bestel']);
		if(!in_array($_GET['id'], $bestelItem)){
			$_SESSION['bestel'] = $_GET['id'].'[@]'.$_SESSION['bestel'];	
			
		}
		echo $_SESSION['bestel'];
	}else{
		$_SESSION['bestel'] = $_GET['id'].'[@]'; 
	}
	
	
}

foreach($item AS $itemInfo){
	echo '<p><strong>'.$itemInfo[0]. '</strong><br />' .$itemInfo[1].'</p>';
	echo '<p>&euro; ' .($itemInfo[2]/100). '</p>';
	echo '<a href="?actie=bestel&id='.$itemInfo[3].'">Bestellen</a>';
}

?>