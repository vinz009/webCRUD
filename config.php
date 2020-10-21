<?php
//initialize databases inputs
//define ("dbhost","localhost");/
//define ("dbuser","bebz");
//define ("dbpass","bebong09");
//define ("dbname","students_db");
/*
$dbhost='localhost';
$dbuser='bebz';
$dbpass='bebong09';
$dbname='students_db';
//try to connect in the database
$link = mysql_connect ($dbhost,$dbuser,$dbpass,$dbname);

//check connection
if ($link) {
  die ( "capt we got a prob" . mysql_error());
}
*/

//testing lang
 $dbc = mysqli_connect('localhost', 'bebz', 'bebong09' , 'student_db')
      or die('Error connecting to MySQL server.ss');

/*
if($dbc){
  echo "may conection nata"."<br>" ;
}
*/
?>
