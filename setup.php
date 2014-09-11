<!--Created By programming-source.com -->
<!--Run this script from your localhost/createdb.php -->
<!--Using this script assumes your testing on wamp with username: root and no password -->

<?php
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_query("CREATE DATABASE MyDB") or die(mysql_error());
    mysql_select_db("cat") or die(mysql_error());
    mysql_query("CREATE TABLE user(username varchar(20), password varchar(20), permission varchar(20))") or die(mysql_error());
    mysql_query("INSERT INTO user(username,password,permission) VALUES('Matt','311807','admin')") or die(mysql_error());  
    mysql_query("CREATE TABLE cattbl(id INT NOT NULL PRIMARY KEY ,name VARCHAR(30),roll INT NOT NULL,technology VARCHAR(30),semister VARCHAR(30),shift VARCHAR(30),bdate varchar(30),cell VARCHAR(30),address VARCHAR(30),picture LONGBLOB)") or die(mysql_error());        

        header("Location: index.php");
?>
