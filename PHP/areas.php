<?php

  function getAllCategories() {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM userareas');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getCategoryById($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM userareas WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function createCategory($name) {
    global $conn;

    $stmt = $conn->prepare('INSERT INTO userareas VALUES (DEFAULT, ?)');
    $stmt->execute(array($name));
  }

  function updateCategory($id, $name) {
    global $conn;

    $stmt = $conn->prepare('UPDATE userareas SET name = ? WHERE id = ?');
    $stmt->execute(array($name, $id));
  }

?>