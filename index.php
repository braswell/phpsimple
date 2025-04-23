<?php

/*
$dbserver = '192.168.1.1';
$dbuser   = 'user';
$dbpass   = 'pass';
$dbport   = '3306';
$dbname   = 'sampledb';

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname, $dbport);

if ($conn->connect_errno) 
{
   die("Connection failed: " . $conn->connect_errno);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) 
{
echo $row['name'] . "<br />\n";
}
*/

phpinfo();
