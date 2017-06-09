<html>

<body>
<form action="asd.php" method="post" />


<input type="submit" Name = "Monday" value = "Monday">
<input type="submit" Name = "Tuesday" value = "Tuesday">
<input type="submit" Name = "Wednesday" value = "Wednesday">
<input type="submit" Name = "Thursday" value = "Thursday">
<input type="submit" Name = "Friday" value = "Friday">
<input type="submit" Name = "Saturday" value = "Saturday"	>
<input type="submit" Name ="Sunday" value ="Sunday">
<br>
<br>
<?php
//echo "Today is " . date("Y/m/d") . "<br>";
//echo "Today is " . date("Y.m.d") . "<br>";
//echo "Today is " . date("Y-m-d") . "<br>";
//echo "Today is " . date( " l");
if(isset($_POST['Sunday']))
{
$d=strtotime("Sunday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}
if(isset($_POST['Monday']))
{
$d=strtotime("Monday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d ", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}
if(isset($_POST['Tuesday']))
{
$d=strtotime("Tuesday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}
if(isset($_POST['Wednesday']))
{
$d=strtotime("Wednesday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}
if(isset($_POST['Thursday']))
{
$d=strtotime("Thursday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}
if(isset($_POST['Friday']))
{
$d=strtotime("Friday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}
if(isset($_POST['Saturday'])) 
{
$d=strtotime("Saturday");
$enddate= strtotime("+6 weeks",$d);
while ($d < $enddate) {
echo date("M d", $d) . "<br>";
$d = strtotime(" +1 week", $d);
}
}

?>
</form>
</body>
</html> 