<?php  // php para ligar à base de dados
  session_start();
    
  $conn = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=sibd17g24', 'sibd17g24', 'sibdsibd'); 
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  $conn->query("SET SCHEMA 'feupduvidas'");
  //PDO_DBLIB is a driver that implements the PHP Data Objects (PDO) interface to enable access from PHP to Microsoft SQL Server and Sybase databases through the FreeTDS library.
?> 