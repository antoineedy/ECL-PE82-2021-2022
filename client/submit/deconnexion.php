<?php

session_start();

unset($_SESSION['pseudo']);


header('LOCATION: ../index.php');

