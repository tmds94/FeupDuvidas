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

	$stmt=$conn->prepare('SELECT * FROM cadeiras WHERE ano=? AND semestre= ? AND ramo=? AND espec IS NULL');
	$stmt->execute(array($year,$semestre,$ramo));
	return $stmt->fetchAll();
}

function getEspec($ramo)
{
	global $conn;

	$stmt=$conn->prepare('SELECT DISTINCT * FROM cadeiras WHERE ramo = ? AND ano=4 AND semestre =1 AND espec IS NOT NULL');
	$stmt->execute(array($ramo));
	return $stmt->fetchAll();
}

function getEspecCourses($espec,$ramo)
{
	global $conn;

	$stmt=$conn->prepare('SELECT DISTINCT id,nome FROM cadeiras WHERE espec = ? AND ramo=?');
	$stmt->execute(array($espec,$ramo));
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
