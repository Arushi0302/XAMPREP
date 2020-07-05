<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$a= $_POST["a"]; [B]//get value from search.html[/B]
mysql_select_db("onm", $con);
$result = mysql_query("SELECT * FROM uploads
WHERE filename '$a'");
while($row = mysql_fetch_array($result))
  {
  echo "<table  align=center class=lims>";
  echo "<tr>";
  echo "<th bgcolor=#5D9BCC >SiteID</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['SiteId'] . "</td>";
  
  
  echo "<tr>";
			
			
			
  echo "<th bgcolor=#5D9BCC>Alias</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['Alias'] . "</td>";
  
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>Code</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['Code'] . "</td>";
    echo "</tr>";
	
	
	 echo "<tr>";
  echo "<th bgcolor=#5D9BCC>Region</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['Region'] . "</td>";
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>City</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['City'] . "</td>";
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>GF-RT Status</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['GreenFieldRoofTop'] . "</td>";
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>Indoor OutdoorStatus</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['IndoorOutdoor'] . "</td>";
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>HODate</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['HODate'] . "</td>";
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>Host</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['Host'] . "</td>";
    echo "</tr>";
	
	echo "<tr>";
  echo "<th bgcolor=#5D9BCC>Guest</th>";
  echo "<td bgcolor=#FEE9A9>" . $row['Guest'] . "</td>";
    echo "</tr>";
	
	
	 
	  $b =$row['SiteId']; 
  }
echo "</table>";
mysql_close($con);
?>