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
 function format_tanggal_time($tgl) {
          if ($tgl != "0000-00-00 00:00:00" && $tgl != "") {

               $temp = explode(" ", $tgl);
               $jam = $temp[1];

               $temp = explode("-", $temp[0]);
               $tahun = $temp[0];
               $bln = $temp[1];
               $hari = $temp[2];


               switch ($bln) {
                    case "01" : $namaBln = "Jan";
                         break;
                    case "02" : $namaBln = "Feb";
                         break;
                    case "03" : $namaBln = "Mar";
                         break;
                    case "04" : $namaBln = "Apr";
                         break;
                    case "05" : $namaBln = "May";
                         break;
                    case "06" : $namaBln = "Jun";
                         break;
                    case "07" : $namaBln = "Jul";
                         break;
                    case "08" : $namaBln = "Aug";
                         break;
                    case "09" : $namaBln = "Sep";
                         break;
                    case "10" : $namaBln = "Oct";
                         break;
                    case "11" : $namaBln = "Nov";
                         break;
                    case "12" : $namaBln = "Dec";
                         break;
               }
               $tgl_full = "$hari $namaBln $tahun";
               return $tgl_full;
          } else
               return "";
     }

function get_auto_increment($tablename){
    
    $next_increment = 0;
    $qShowStatus = "SHOW TABLE STATUS LIKE '$tablename'";
    $qShowStatusResult = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );

    $row = mysql_fetch_assoc($qShowStatusResult);
    $next_increment = $row['Auto_increment'];

    return $next_increment;
}

function dateAgo($date) {
  $ts = strtotime($date);
  $tsYmdDate = strtotime(date('Y-m-d 00:00:00', $ts));
 
  $tsNow = time();
  $dateNow = date('Y-m-d H:i:s', $tsNow);
  $tsYmdNow = strtotime(date('Y-m-d 00:00:00', $tsNow));
 
  $diff = ($tsYmdNow - $tsYmdDate)/(60*60*24);
 
  if ($diff == '1') {
 
    return "yesterday at ".date('g:i A', $ts);
 
  } else {
 
    $diff = abs($tsNow - $ts);
 
    $seconds  = $diff;
    $minutes  = floor($diff/60);
    $hours    = floor($minutes/60);
    $days     = floor($hours/24);
 
    if ($seconds < 60) {
      return "$seconds seconds ago";
    } elseif ($minutes < 60) {
      return ($minutes == 1) ? "a minute ago" : "$minutes minutes ago" ;
    } elseif ($hours < 24) {
      return ($hours == 1) ? "an hour ago" : "$hours hours ago" ;
    } else {
      return $date;
    }
 
  }
 
}


?> 
