<?php
//$connection=mysqli_connect("name of website","sql username","sql password","DB name");
$connection=mysqli_connect("localhost","root","","comments");

if($connection){
    echo "connection established! <br>";
} 
else{
    die("connection failed. Reason:".mysqli_connect_error());
}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Commentszz</title>
 </head>

<body>
 <form id="form1" name="form1" method="post" action="Comments.php">
 <label>Please type in a message
 <input type="text" name="msg" id="msg" />
 </label>
 <label>and your name
 <input type="text" name="name" id="name" />
 </label>

 <p>
 <label>
 <input type="submit" name="submit" id="submit" value="Submit" />
 </label>
 </p>
 </form><!--
--></body>
 </html>


<?php
if($connection){
    echo "connection established! <br>";
} 

$msg=$_POST['msg'];
$name=$_POST['name'];
$sql="insert into ctable (msg, name) values('$msg','$name')";

    if(!mysqli_query($connection,$sql)){
          echo "<h3>persons's data is NOT inserted successfully</h3>";
    }  


//this is pulling data
$sql="SELECT ID, msg, name FROM ctable";
$results = mysqli_query($connection,$sql);

if(mysqli_num_rows($results) > 0) 
    {
    While($row=mysqli_fetch_array($results)) {
    //this is where the table formatting should go. $row[1]
        
       echo "Message: ". $row[1]. " Name ". $row[2];
                
                
        //echo $row[1]." ".$row[2];
    
    echo"<br>";
    
    }
}      


    mysqli_close($connection);
?>