<?php


$dbname = new PDO('mysql:host=localhost;dbname=expense_tracker;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, 
                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>