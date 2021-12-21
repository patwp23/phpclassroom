<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<p><center><h4>รายงานสถานการโควิด-19 แยกจังหวัด</h4></center></p>";
  echo "<table border='1'>";
  echo "<tr><td>ลำดับ</td><td>จังหวัด</td><td>ผู้ป่วยใหม่</td><td>ผู้ป่วยรวม</td><td>ผู้ป่วยใหม่ในประเทศ</td><td>ผู้ป่วยรวมในประเทศ</td><td>ผู้เสียชีวิตใหม่</td><td>ผู้เสียชีวิตรวม</td><td>วันที่อัพเดท</td></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province; 
    echo "</td>";
    echo "<td>";
    echo $val->new_case; 
    echo "</td>";    
    echo "<td>";
    echo $val->total_case; 
    echo "</td>";
    echo "<td>";
    echo $val->new_case_excludeabroad; 
    echo "</td>";
    echo "<td>";
    echo $val->total_case_excludeabroad; 
    echo "</td>";
    echo "<td>";
    echo $val->new_death; 
    echo "</td>";
    echo "<td>";
    echo $val->total_death; 
    echo "</td>";
    echo "<td>";
    echo $val->update_date; 
    echo "</td>";
    
    echo "</tr>";
   }
  echo "</table>";

?>
