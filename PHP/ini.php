<?php  // php para ligar à base de dados
  session_start();
    
  $conn = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=sibd17g24', 'sibd17g24', 'sibdsibd'); 
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  $conn->query("SET SCHEMA 'feupduvidas'");
  //PDO_DBLIB is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to Microsoft SQL Server and Sybase databases through the FreeTDS library.
  if (isset($_SESSION['error_message'])) {
    $_ERROR_MESSAGE = $_SESSION['error_message']; 
    unset($_SESSION['error_message']);
  }

  if (isset($_SESSION['success_message'])) {
    $_SUCCESS_MESSAGE = $_SESSION['success_message']; 
    unset($_SESSION['success_message']);
  }

  if (isset($_SESSION['form_values'])) {
    $_FORM_VALUES = $_SESSION['form_values']; 
    unset($_SESSION['form_values']);
  }
?> 