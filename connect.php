<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 27/10/2018
 * Time: 11:34
 */

$db=mysqli_connect("localhost", "root","") ;
if (!$db) {
    die ("Could not connect to database" . mysqli_connect_error());
}

mysqli_select_db($db,'kirigoPersonalWebsite') or die('Error selecting database : ' . mysqli_connect_error());