<?php
#Logs out of the website
session_start();
session_destroy();
header("location: index.php");
