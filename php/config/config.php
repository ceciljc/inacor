<?php  
function open_connection(){ 
 $db_host="localhost"; 
 $db_user="root";
 $db_pass="new-password";
 $link=mysql_connect($db_host,$db_user,$db_pass)  
 or die ("inacorner"); 
 mysql_select_db("inacorner");
 return $link; 
}


function get_auto_increment($tablename){
    
    $next_increment = 0;
    $qShowStatus = "SHOW TABLE STATUS LIKE '$tablename'";
    $qShowStatusResult = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );

    $row = mysql_fetch_assoc($qShowStatusResult);
    $next_increment = $row['Auto_increment'];

    return $next_increment;
}
?> 
