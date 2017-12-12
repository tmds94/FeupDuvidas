<?php
function insertFile($uc_id, $file_name, $cat_id, $user_id){
   global $conn;
    
    $stmt = $conn->prepare('INSERT INTO files (uc_id, filename, categoria, user_id) VALUES(?,?,?,?)');
    $stmt->execute(array($uc_id, $file_name,$cat_id, $user_id));
     $stmt2 = $conn->prepare('SELECT MAX(id) FROM files'); //insert file last row
    $stmt2->execute();	
    return $stmt2->fetch();
  }

function getFilesFromCourse($uc_id, $cat_id, $page, $PAGE_SIZE){
	global $conn;

	$stmt = $conn->prepare('SELECT * FROM files WHERE uc_id = ? AND categoria= ?  ORDER BY id LIMIT '.$PAGE_SIZE.' OFFSET ' . $page * $PAGE_SIZE);
	$stmt->execute(array($uc_id,$cat_id));

   	return $stmt->fetchAll();
}

function getFiles($file_id){
	global $conn;

	$stmt = $conn->prepare('SELECT * FROM files WHERE id = ?');
	$stmt->execute(array($file_id));

   	return $stmt->fetch();
}
function getFilesBySearch($name, $cat_id, $uc_id) {
    global $conn;

    $query = 'SELECT * FROM files WHERE 1=1';
    $params = array();

    if ($name) {
      $query .= ' AND filename ILIKE ?'; //ILIKE used fo case insensitiveness //.= used to concatenate the strings
      $params[] = '%' . $name . '%';
    }

    if ($cat_id) {
      $query .= ' AND categoria = ?';
      $params[] = $cat_id;
    }

    if($uc_id){
      $query .= ' AND uc_id = ?';
      $params[] = $uc_id;
    }

    $stmt = $conn->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll();
  }

function removeFile($file_id){
	global $conn;

	$stmt = $conn->prepare('DELETE FROM files WHERE id = ?');
	$stmt->execute(array($file_id));

}
function getFileCountFromCourse($uc_id, $cat_id) {
    global $conn;
    $stmt = $conn->prepare('SELECT COUNT(*) AS count FROM files WHERE uc_id = ? AND categoria=?');
    $stmt->execute(array($uc_id,$cat_id));
    return $stmt->fetch()['count'];
  }

?>
