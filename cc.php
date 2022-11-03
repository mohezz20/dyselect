<?php
$db= new mysqli("localhost","root","","dyselect");

if($_GET['tar']=='degs'){
     $q="select * from degs";
}elseif($_GET['tar']=='emps'){
   $q= "select * from names where deg=" . $_GET['empdeg'];  
}


$res= $db->query($q);


while($row =$res->fetch_row())
            {
                 echo "<option value=".$row[0].">".$row[1]."</option>";
                 
            }
?>