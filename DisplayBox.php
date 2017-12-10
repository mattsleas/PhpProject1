<link href="DisplayBox.css" rel="stylesheet" type="text/css"/>
<fieldset>
<legend>Find Players</legend>
<h1>Username</h1><br>

<?php
$sql="SELECT $username, $cmbt, $activity FROM rstable";
$results = mysqli_query($connection,$sql);

if(mysqli_num_rows($results) > 0) 
    {
    While($row=mysqli_fetch_array($results)) {
    //this is where the table formatting should go. $row[1]
echo "$row[1]";

echo "<h1>Combat Level</h1>";

echo "$row[2]";

echo "<h1>Activity</h1>";

echo "$row[3]";

echo "<br>";
echo "<h1>NOTE: Set private chat 'on' to be contacted.</h1>";
echo "</fieldset>";
    }
}      


mysqli_close($connection);
