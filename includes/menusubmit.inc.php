<?php
include_once 'dbh.inc.php';
session_start();
$table = $_SESSION['table_name'];
$amount = 0;
//Generating the unique id for the table
$u_id = uniqid('', true);
$_SESSION['u_id'] = $u_id;

if(isset($_POST['ck1'])){
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Lighter Burger', 40);";
    mysqli_query($conn, $sql);
    $amount = $amount + 40;
}
if(isset($_POST['ck2'])){
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Mealer Burger', 50);";
    mysqli_query($conn, $sql);
    $amount = $amount + 50;
}

if (isset($_POST['ck3'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Spicy Paneer Burger', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck4'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cheese Burger', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck5'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Tandoori Burger', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck6'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Spicy Grilled Burger', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck7'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cucumber Burger', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck8'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Ginger Burger', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}

if (isset($_POST['ck9'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Achari Burger', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
if (isset($_POST['ck10'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Smoky Burger', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
//===============================================================================================

if (isset($_POST['ck11'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Maxixan Burger', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
if (isset($_POST['ck12'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Pineapple Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}

if (isset($_POST['ck13'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Special Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck14'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Special Barbique Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}

if (isset($_POST['ck15'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Mix Juicy Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck16'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Veg. Laroma Burge', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}

if (isset($_POST['ck17'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Egg Burger', 50);";
    mysqli_query($conn, $sql);
    $amount = $amount + 50;
}
if (isset($_POST['ck18'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Lighter Burger', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck19'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Spicy Burger', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
if (isset($_POST['ck20'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Tandoori Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
//===========================================================================================================================
if (isset($_POST['ck21'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Grilled Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck22'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Cucumber Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}

if (isset($_POST['ck23'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Zinger Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck24'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Achari Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}

if (isset($_POST['ck25'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Smoky Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck26'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Maxican Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}

if (isset($_POST['ck27'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Barbique Burger', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck28'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Mix Juicy Burger', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}

if (isset($_POST['ck29'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Cheese Burger', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}
if (isset($_POST['ck30'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Pineapple Burger', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}
//=========================================================================================================
if (isset($_POST['ck31'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Special Burger', 110);";
    mysqli_query($conn, $sql);
    $amount = $amount + 110;
}
if (isset($_POST['ck32'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Laroma Burger', 120);";
    mysqli_query($conn, $sql);
    $amount = $amount + 120;
}

if (isset($_POST['ck33'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cheese tomato Pizza', 110);";
    mysqli_query($conn, $sql);
    $amount = $amount + 110;
}
if (isset($_POST['ck34'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cheese Chilli Pizza', 130);";
    mysqli_query($conn, $sql);
    $amount = $amount + 130;
}

if (isset($_POST['ck35'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Mexican Veg. Pizza', 150);";
    mysqli_query($conn, $sql);
    $amount = $amount + 150;
}
if (isset($_POST['ck36'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Farm House Pizza', 160);";
    mysqli_query($conn, $sql);
    $amount = $amount + 160;
}

if (isset($_POST['ck37'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Paneer Tikka Pizza', 180);";
    mysqli_query($conn, $sql);
    $amount = $amount + 180;
}
if (isset($_POST['ck38'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cheese Burst Pizza', 180);";
    mysqli_query($conn, $sql);
    $amount = $amount + 180;
}

if (isset($_POST['ck39'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'MBH Veg. Special Pizza', 220);";
    mysqli_query($conn, $sql);
    $amount = $amount + 220;
}
if (isset($_POST['ck40'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Plain Chicken Pizza', 140);";
    mysqli_query($conn, $sql);
    $amount = $amount + 140;
}
//======================================================================================================================================
if (isset($_POST['ck41'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Masala Pizza', 160);";
    mysqli_query($conn, $sql);
    $amount = $amount + 160;
}
if (isset($_POST['ck42'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Classic Chicken Pizza', 170);";
    mysqli_query($conn, $sql);
    $amount = $amount + 170;
}

if (isset($_POST['ck43'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Maxican Chicken Pizza', 180);";
    mysqli_query($conn, $sql);
    $amount = $amount + 180;
}
if (isset($_POST['ck44'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Tikka Pizza', 220);";
    mysqli_query($conn, $sql);
    $amount = $amount + 220;
}

if (isset($_POST['ck45'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Cheese Burst Pizza', 220);";
    mysqli_query($conn, $sql);
    $amount = $amount + 220;
}
if (isset($_POST['ck46'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'MBH Chicken Special Pizza', 260);";
    mysqli_query($conn, $sql);
    $amount = $amount + 260;
}

if (isset($_POST['ck47'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Veg. Sandwich', 60);";
    mysqli_query($conn, $sql);
    $amount = $amount + 60;
}
if (isset($_POST['ck48'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cheese Sandwich', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck49'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Paneer Sandwich', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck50'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Super Sandwich', 110);";
    mysqli_query($conn, $sql);
    $amount = $amount + 110;
}
//=================================================================================================
if (isset($_POST['ck51'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Egg Sandwich', 40);";
    mysqli_query($conn, $sql);
    $amount = $amount + 40;
    
}
if (isset($_POST['ck52'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Basic Sandwich', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}

if (isset($_POST['ck53'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Cheese Sandwich', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck54'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Classic Sandwich', 110);";
    mysqli_query($conn, $sql);
    $amount = $amount + 110;
}

if (isset($_POST['ck55'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'French Fries', 50);";
    mysqli_query($conn, $sql);
    $amount = $amount + 50;
}
if (isset($_POST['ck56'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Masala Fries', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck57'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chilli Garlic Pops', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck58'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Super Veggie', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck59'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Veg. Savoury', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
if (isset($_POST['ck60'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Veg. Nuggets', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
//===========================================================================================================
if (isset($_POST['ck61'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cheese Shot', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}

if (isset($_POST['ck62'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Veg. Strips(4 pcs)', 40);";
    mysqli_query($conn, $sql);
    $amount = $amount + 40;
}
if (isset($_POST['ck63'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Pops', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}

if (isset($_POST['ck64'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Juicy', 100);";
    mysqli_query($conn, $sql);
}
if (isset($_POST['ck65'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Salad', 130);";
    mysqli_query($conn, $sql);
    $amount = $amount + 130;
}

if (isset($_POST['ck66'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Wings(6 pcs)', 100);";
    mysqli_query($conn, $sql);
    $amount = $amount + 100;
}
if (isset($_POST['ck67'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Legs(2 pcs)', 120);";
    mysqli_query($conn, $sql);
    $amount = $amount + 120;
}

if (isset($_POST['ck68'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Veg Tortilla Wrap', 99);";
    mysqli_query($conn, $sql);
    $amount = $amount + 99;
}
if (isset($_POST['ck69'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Paneer Tortilla Wrap', 119);";
    mysqli_query($conn, $sql);
    $amount = $amount + 119;
}
if (isset($_POST['ck70'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Egg Tortilla Wrap', 99);";
    mysqli_query($conn, $sql);
    $amount = $amount + 99;
}
//=======================================================================================================================
if (isset($_POST['ck71'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Tortilla Wrap', 139);";
    mysqli_query($conn, $sql);
    $amount = $amount + 139;
}
if (isset($_POST['ck72'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Red Sauce Pasta', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}

if (isset($_POST['ck73'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'White Sauce Pasta', 90);";
    mysqli_query($conn, $sql);
    $amount = $amount + 90;
}
if (isset($_POST['ck74'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Blue Caracao', 60);";
    mysqli_query($conn, $sql);
    $amount = $amount + 60;
}

if (isset($_POST['ck75'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Blood Orange', 60);";
    mysqli_query($conn, $sql);
    $amount = $amount + 60;
}
if (isset($_POST['ck76'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Green Mint', 60);";
    mysqli_query($conn, $sql);
    $amount = $amount + 60;
}

if (isset($_POST['ck77'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Passion Fruit', 60);";
    mysqli_query($conn, $sql);
    $amount = $amount + 60;
}
if (isset($_POST['ck78'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Hot Coffee', 30);";
    mysqli_query($conn, $sql);
    $amount = $amount + 30;
}

if (isset($_POST['ck79'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Black Coffee', 30);";
    mysqli_query($conn, $sql);
    $amount = $amount + 30;
}
if (isset($_POST['ck80'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Cold Coffee', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
//==============================================================================================================
if (isset($_POST['ck81'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Soft Drinks', 20);";
    mysqli_query($conn, $sql);
    $amount = $amount + 20;
}
if (isset($_POST['ck82'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Vanilla Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck83'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chocolate Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck84'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Strawberry Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck85'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Butter Scotch Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck86'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Mango Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck87'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Black Current Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck88'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Pineapple Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}

if (isset($_POST['ck89'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Kiwi Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck90'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Mix Cream Shake', 80);";
    mysqli_query($conn, $sql);
    $amount = $amount + 80;
}
//==================================================================================================================
if (isset($_POST['ck91'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Oreo Shake', 70);";
    mysqli_query($conn, $sql);
    $amount = $amount + 70;
}
if (isset($_POST['ck92'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Light Burger + French Fries + Soft Drink', 99);";
    mysqli_query($conn, $sql);
    $amount = $amount + 99;
}

if (isset($_POST['ck93'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Lighter + 2 Wings + Soft Drink', 129);";
    mysqli_query($conn, $sql);
    $amount = $amount + 129;
}
if (isset($_POST['ck94'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Miller Burger + Paneer Burger + 5 pcs Strip + Half Nuggets + Soft Drink', 199);";
    mysqli_query($conn, $sql);
    $amount = $amount + 199;
}

if (isset($_POST['ck95'])) {
    $sql = "INSERT INTO burgarhut_tb_menu(u_id, table_name, menu_item, price) VALUES('{$u_id}','{$table}', 'Chicken Miller Burger + Egg Burger + 2 Leg pcs + 3 pcs Wings + Soft Drink', 299);";
    mysqli_query($conn, $sql);
    $amount = $amount + 299;
}
$_SESSION['amount'] = $amount;
$sql = "UPDATE burgarhut_tb_price SET price='$amount' WHERE table_name='$table';";
mysqli_query($conn, $sql);
$sql = "UPDATE burgarhut_tb_id SET u_id='$u_id' WHERE table_name='$table';";
mysqli_query($conn, $sql);
header("Location: invoice.inc.php");
exit();
?>