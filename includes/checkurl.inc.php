<?php
while(true){
    $id = uniqid('', true);
    $sql = "INSERT INTO TEST(id) VALUES('{$id}');";
    mysqli_query($conn, $sql);
    sleep(10);
}
?>