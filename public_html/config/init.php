<?php
  session_start();

  error_reporting(error_reporting() & ~E_NOTICE);
  // Reporting E_NOTICE can be good too (to report uninitialized
  // variables or catch variable name misspellings ...)

  $conn = new PDO('pgsql:host=dbm.fe.up.pt;port=5432;dbname=sibd17g24', 'sibd17g24', 'sibdsibd');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 if (isset($_SESSION['error_message'])) {
    $_ERROR_MESSAGE = $_SESSION['error_message']; //isset checks if the variable exists
    unset($_SESSION['error_message']); //unset() destroys the specified variables
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
