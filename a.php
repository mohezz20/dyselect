<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_POST['car']."<br>";
    $db= new mysqli("localhost","root","","dyselect");
    $res= $db->query("select * from names");
   
    ?>
    <div>
        <form action="a.php" method="post">
        <select name="car" id="">
            <?php
            $i=0;
            while($row =$res->fetch_assoc())
            {
                 echo "<option value=".$row['id'].">".$row['name']."</option>";
                 
            }
          
            ?>
        </select>
        <input type="submit" value="any">
    </form>
    </div>
</body>
</html>