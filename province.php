<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  

  echo "<p><center><font color='#29475A'><h2>รายงานสถานการโควิด-19 แยกจังหวัด</h2></center></p>";
  echo "<body style = 'background-color:#DDF7EE'>";
  echo "<p><center><table border='1'>";
  echo "<tr><td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ลำดับ</b></font></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>จังหวัด</b></font></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ผู้ป่วยใหม่</b></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ผู้ป่วยรวม</b></font></font></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ผู้ป่วยใหม่ในประเทศ</b></font></font></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ผู้ป่วยรวมในประเทศ</b></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ผู้เสียชีวิตใหม่</b></font></center></td>
  <td style = 'background-color:#29475A'><center><font color='FFFFFF'><b>ผู้เสียชีวิตรวม</b></font></center></td>
	</tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td style = 'background-color:#ADD6DE'><center>";
    echo ($key+1);
    echo "</center></td>";
    echo "<td style = 'background-color:#DDFCFF'>";
    echo $val->province; 
    echo "</td>";
    echo "<td style = 'background-color:#ADD6DE'><center>";
    echo $val->new_case; 
    echo "</center></td>";    
    echo "<td style = 'background-color:#DDFCFF'><center>";
    echo $val->total_case; 
    echo "</center></td>";
    echo "<td style = 'background-color:#ADD6DE'><center>";
    echo $val->new_case_excludeabroad; 
    echo "</center></td>";
    echo "<td style = 'background-color:#DDFCFF'><center>";
    echo $val->total_case_excludeabroad; 
    echo "</center></td>";
    echo "<td style = 'background-color:#ADD6DE'><center>";
    echo $val->new_death; 
    echo "</center></td>";
    echo "<td style = 'background-color:#DDFCFF'><center>";
    echo $val->total_death; 
    echo "</center></td>";
    echo "</tr>";
   }
  echo "</table></center></p>";

    echo "<br><br>";
    echo "<center><font color='#29475A'><b>วันที่อัพเดต</b></center>";
	echo $val->update_date; 
	
?>
