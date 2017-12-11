<?php
function getCategoryName($cat_id){
   global $conn;

    $stmt = $conn->prepare('SELECT * FROM cats WHERE id=?');
    $stmt->execute(array($cat_id));

    return $stmt->fetch();
  }

function getAllCategories(){
	global $conn;

	$stmt=$conn->prepare('SELECT * FROM cats');
	$stmt->execute();
	return $stmt->fetchAll();
}

?>
