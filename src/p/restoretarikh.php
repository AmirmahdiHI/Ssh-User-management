<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
////   Create Setting Table
$createtablesetting = "CREATE TABLE if not exists `setting` (
id ENUM('1') NOT NULL ,
adminuser VARCHAR(30),
 adminpassword VARCHAR(30) ,
 sshport VARCHAR(30) ,
 tgtoken VARCHAR(30) ,
 tgid VARCHAR(30) ,
 language VARCHAR(30) ,
 UNIQUE (id));";
if ($conn->query($createtablesetting) === TRUE) {echo "Table Setting created <BR>";}
////   Create Users Table 
$createuserlist = "CREATE TABLE if not exists `users` ( 
`id` bigint(20) NOT NULL AUTO_INCREMENT ,
 username VARCHAR(30),
 password VARCHAR(30) ,
 email VARCHAR(30) ,
 mobile VARCHAR(30) ,
 multiuser VARCHAR(30),
 startdate VARCHAR(30),
 finishdate VARCHAR(30),
 enable VARCHAR(30),
 traffic VARCHAR(30),
 referral VARCHAR(30),
 CONSTRAINT reference_unique UNIQUE (username) ,
 primary key (id));";
if ($conn->query($createuserlist) === TRUE) {echo "Table Users created <br>";}
////   Create Servers Table
$createtablesetting = "CREATE TABLE if not exists `servers` (
`id` bigint(20) NOT NULL AUTO_INCREMENT ,
serverip VARCHAR(30) NOT NULL,
serverusername VARCHAR(30) NOT NULL,
serverpassword VARCHAR(30) NOT NULL,
 primary key (id));";
if ($conn->query($createtablesetting) === TRUE) {echo "Table servers created <BR>";}
////   Create Telegram Messages
$createtablesetting = "CREATE TABLE if not exists `tgmessage` (
id ENUM('1') NOT NULL ,
account1m VARCHAR(900) ,
account2m VARCHAR(900) ,
account3m VARCHAR(900) ,
account6m VARCHAR(900) ,
account12m VARCHAR(900) ,
contactadmin VARCHAR(900) ,
rahnama VARCHAR(900) ,
tamdid VARCHAR(900) ,
 UNIQUE (id));";
if ($conn->query($createtablesetting) === TRUE) {echo "Table tgmessage created <BR>";}
///   Create Api Token Table 
$createtablesetting = "CREATE TABLE if not exists `ApiToken` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT ,
    Token VARCHAR(30) NOT NULL,
    Description VARCHAR(30) NOT NULL,
    Allowips VARCHAR(30) NOT NULL,
    enable VARCHAR(30) NOT NULL,
     primary key (id));";
    if ($conn->query($createtablesetting) === TRUE) {echo "Table servers created <BR>";}
///////////////////////////////





$adduser = "INSERT INTO tgmessage (account1m,account2m,account3m,account6m,account12m,contactadmin,rahnama,tamdid ) VALUES ('','','','','','','','');";
if ($conn->query($adduser) === TRUE) {echo "tgmessage insted <br>";}


$setting = "INSERT INTO setting (adminuser,adminpassword,sshport ) VALUES ( '".$username."', '".$password."', '".$port."');";
if ($conn->query($setting) === TRUE) {echo "Setting Added <br>";}

?>