<?php
    $db= new mysqli("localhost","root","","dyselect");
    $res= mysqli_query($db,"insert into  names ('name') values('bakr')");
    var_dump($res);
    echo $db->error

?>