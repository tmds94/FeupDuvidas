<?php

function getCourses($year, $semestre)
{
	global $conn;

	$stmt=$conn->prepare('SELECT * FROM cadeiras WHERE ano=? AND semestre= ?');
	$stmt->execute(array($year,$semestre));
	return $stmt->fetchAll();
}

function getCadeira($cat_id)
{
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM cadeiras WHERE id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetch();
}

function getRamos()
{
	global $conn;

    $stmt = $conn->prepare('SELECT DISTINCT ramo FROM cadeiras WHERE ramo IS NOT NULL');
    $stmt->execute();
    return $stmt->fetchAll();
}

function getCoursesRamo($year, $semestre, $ramo)
{
	global $conn;

	$stmt=$conn->prepare('SELECT * FROM cadeiras WHERE ano=? AND semestre= ? AND ramo=?' );
	$stmt->execute(array($year,$semestre,$ramo));
	return $stmt->fetchAll();
}

function getAllCourses()
{
	global $conn;

	$stmt=$conn->prepare('SELECT * FROM cadeiras');
	$stmt->execute();
	return $stmt->fetchAll();
}
?>
