<?php
$con = mysqli_connect('localhost', 'root', 'vinayaka@19','midterm_project');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT Balance FROM Account");

echo "<table border='1'>
<tr>
<th>Balance</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Balance'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>