<?php
$db= new mysqli("localhost","root","","dyselect");
$q= "select * from names ";

$res= $db->query($q);

while($row =$res->fetch_assoc())
            {
                 echo "<option value=".$row['id'].">".$row['name']."</option>";
                 
            }
?>