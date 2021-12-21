<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<p><center><h3>รายงานสถานการโควิด-19 แยกจังหวัด</h3></center></p>";
  echo "<p><center><table border='1'>";
  echo "<tr><td><center><b>ลำดับ</b></center></td><td><center><b>จังหวัด</b></center></td><td><center><b>ผู้ป่วยใหม่</b></center></td><td><center><b>ผู้ป่วยรวม</b></center></td>
  <td><center><b>ผู้ป่วยใหม่ในประเทศ</b></center></td><td><center><b>ผู้ป่วยรวมในประเทศ</b></center></td><td><center><b>ผู้เสียชีวิตใหม่</b></center></td>
  <td><center><b>ผู้เสียชีวิตรวม</b></center></td><td><center><b>วันที่อัพเดท</b></center></td></tr>";
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
  echo "</table><p><center>";

?>
