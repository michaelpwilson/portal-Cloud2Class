<?php
 //connect to db
$link = mysql_connect("cpd-db", "cpd", "dkfj55.1");
$db = mysql_select_db('cpd');
    if($_POST['action'] == 'insert'){
 
        $name  = mysql_real_escape_string($_POST['name']);
        $email = mysql_real_escape_string($_POST['email']);
 
        $sql   = "insert into messages (name) values ('$name')";
        $query = mysql_query($sql);
        if($query){
            echo "Record Inserted.";
        }else {
            echo "Something Wrong!";
        }
    }
    //if show key is pressed then show records
    if($_POST['action'] == 'show'){
        $sql   = "select * from messages order by id desc limit 10";
        $query = mysql_query($sql);
 
        echo "<table border='1'>";
        while($row = mysql_fetch_assoc($query)){
            echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td></tr>";
        }
        echo "</table>";
    }
?>
