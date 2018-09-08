<?php
/*
    Adding the database connection MySQL Database
 */
include_once 'dbh.inc.php';

session_start(); //Starting the session
$u_num = uniqid('', true); //Generating the unique id for the conformations
$_SESSION['u_num'] = $u_num;

$ip = $_SERVER['REMOTE_ADDR'];



/*           DELETE THE COMMENT WHEN DEALING TO SERVER   
$table_name = mysqli_real_escape_string($conn, $_GET['table']);
*/

$tab_name = "T2";
$_SESSION['table_name'] = $tab_name;
//Inserting the unique number in the database
$sql = "UPDATE burgarhut_tb_check SET u_num='{$u_num}' WHERE table_name='{$tab_name}';";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM burgarhut_tb_check WHERE table_name='$tab_name';";
$result = mysqli_query($conn, $sql);
$resultChk = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
    $u_numck = $row['u_num'];
    if ($u_numck == $u_num) {
        $sql = "SELECT * FROM burgarhut_tb_flag WHERE table_name-'$tab_name';";
        $result = mysqli_query($conn, $sql);
        $resultChk = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            $flag = $row['flag'];
        }
        if ($flag == 0) {
            header("Location: menu.inc.php"); //Checking for the table flag value
            exit();
        } 
        else {
            header("Location: tablefull.inc.php");
            exit();
        }
    } 
    else {
        echo "Something went wrong!";
        exit();
    }
}

?>