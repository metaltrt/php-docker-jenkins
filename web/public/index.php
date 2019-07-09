<?php

$table = "counter";
try {
     $db = new PDO("mysql:dbname=test;host=mysql", "root", "root" );
     $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
     $sql ="CREATE table if not exists $table(
     counter int NOT NULL default 0);" ;
     $db->exec($sql);
    //  print("Created $table Table.\n");
    $sql = "insert into $table values (0)";
    $db->exec($sql);

    $sql = "select count(*) from $table;";

    $res = $db->query($sql);
    $count = $res->fetch();

    echo "you visited: $count[0] times";

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}

?>