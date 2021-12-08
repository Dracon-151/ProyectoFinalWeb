<?php

require 'Log.php';

session_start();

 session_destroy();
 
	header("location: ../Index.php");
?>