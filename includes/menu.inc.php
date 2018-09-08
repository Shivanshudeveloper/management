<?php
session_start();
include_once 'dbh.inc.php'; // Session and the Database Files are included here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body{
    	background-color:;
    }
	.name ,.menu
	{
		font-family:arial;
		margin:3px 5px;
		width:95%;
	}
	.name
	{
		font-weight:500;
		font-family:arial;
		font-size:1.3em;
	}
	#veg
	{   font-size:1.238em;
		font-weight:400;
		color:white;
	}
	#nonveg
	{   font-size:1.238em;
		font-weight:400;
		color:white;
		
	}
	.checkbox {
	font-weight:300;
	font-size:1.179em;
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom:15px;
    cursor: pointer;
    margin-left:15px;
    font-size: 12pt;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

	.checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.check {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}
.checkbox:hover input ~ .check {
    background-color: #ccc;
}
.checkbox input:checked ~ .check {
    background-color: #2196F3;
}
.check:after {
    content: "";
    position: absolute;
    display: none;
}
.checkbox input:checked ~ .check:after {
    display: block;
}
.checkbox .check:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
#demo6,#demo7,#demo8,#demo02,#demo12,#demo22,#demo32,#demo42,
{
	border:2px solid #B80F0A;
	
}
#demo01,#demo11,#demo21,#demo31,#demo41,#demo5
{
	border:2px solid green;
	
}
#demo6,#demo7,#demo8,#demo91,#demo92
{
	border:2px solid #969696;
	
}
</style>
</head>
<body>
    <form action="menusubmit.inc.php" method="POST">
	<div class="container-fluid">
		<div style="font-weight:600;font-size:1.95em;margin-bottom:10px;margin-top:10px;margin-right:6px">
			<div class="text-center">Menu</div>
		</div>
		<div>
			<div>
                <button type="button" class="btn name" data-toggle="collapse" data-target="#demo">BURGER</button>
  		  		<div id="demo" class="collapse">
      				<button id="veg" type="button" class="btn btn-success menu" data-toggle="collapse" data-target="#demo01">VEG</button>
      				<div id="demo01" class="collapse menu">
      					<label class="checkbox">Lighter Burger(40/-)
  		  				<input type="checkbox" name="ck1">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Mealer Burger(50/-)
  		  				<input type="checkbox" name="ck2">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Spicy Paneer Burger(70/-)
  		  				<input type="checkbox" name="ck3">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cheese Burger(70/-)
  		  				<input type="checkbox" name="ck4">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Tandoori Burger(70/-)
  		  				<input type="checkbox" name="ck5">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Spicy Grilled Burger(70/-)
  		  				<input type="checkbox" name="ck6">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cucumber Burger(70/-)
  		  				<input type="checkbox" name="ck7">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Ginger Burger(80/-)
  		  				<input type="checkbox" name="ck8">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Achari Burger(80/-)
  		  				<input type="checkbox" name="ck9">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Smoky Burger(80/-)
  		  				<input type="checkbox" name="ck10">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Maxixan Burger(80/-)
  		  				<input type="checkbox" name="ck11">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Pineapple Burger(90/-)
  		  				<input type="checkbox" name="ck12">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Special Burger(90/-)
  		  				<input type="checkbox" name="ck13">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Special Barbique Burger(90/-)
  		  				<input type="checkbox" name="ck14">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Mix Juicy Burger(90/-)
  		  				<input type="checkbox" name="ck15">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Veg. Laroma Burger(100/-)
  		  				<input type="checkbox" name="ck16">
  		  				<span class="check"></span>
      					</label>
      				</div>
      				<button id="nonveg" type="button" class="btn  btn-danger menu" data-toggle="collapse" data-target="#demo02">NON-VEG</button>
      				<div id="demo02" class="collapse menu">
      					<label class="checkbox">Egg Burger(50/-)
  		  				<input type="checkbox" name="ck17">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Lighter Burger(70/-)
  		  				<input type="checkbox" name="ck18">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Spicy Burger(80/-)
  		  				<input type="checkbox" name="ck19">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Tandoori Burger(90/-)
  		  				<input type="checkbox" name="ck20">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Grilled Burger(90/-)
  		  				<input type="checkbox" name="ck21">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Cucumber Burger(90/-)
  		  				<input type="checkbox" name="ck22">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Zinger Burger(90/-)
  		  				<input type="checkbox" name="ck23">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Achari Burger(90/-)
  		  				<input type="checkbox" name="ck24">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Smoky Burger(90/-)
  		  				<input type="checkbox" name="ck25">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Maxican Burger(90/-)
  		  				<input type="checkbox" name="ck26">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Barbique Burger(90/-)
  		  				<input type="checkbox" name="ck27">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Mix Juicy Burger(100/-)
  		  				<input type="checkbox" name="ck28">
  		  				<span class="check"></span>
      					</label>d
      					<label class="checkbox">Chicken Cheese Burger(100/-)
  		  				<input type="checkbox" name="ck29">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Pineapple Burger(100/-)
  		  				<input type="checkbox" name="ck30">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Special Burger(110/-) 
  		  				<input type="checkbox" name="ck31">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Laroma Burger(120/-)
  		  				<input type="checkbox" name="ck32">
  		  				<span class="check"></span>
      					</label>
      				</div>
    			</div>
    		</div>
			<div>
				<button type="button" class="btn name" data-toggle="collapse" data-target="#demo1">PIZZA</button>
  		  		<div id="demo1" class="collapse">
      				<button id="veg" type="button" class="btn btn-success menu" data-toggle="collapse" data-target="#demo11">VEG</button>
      				<div id="demo11" class="collapse menu">
      					<label class="checkbox">Cheese tomato Pizza(110/-)
  		  				<input type="checkbox" name="ck33">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cheese Chilli Pizza(130/-)
  		  				<input type="checkbox" name="ck34">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Mexican Veg. Pizza(150/-)
  		  				<input type="checkbox" name="ck35">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Farm House Pizza(160/-)
  		  				<input type="checkbox" name="ck36">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Paneer Tikka Pizza(180/-)
  		  				<input type="checkbox"name="ck37">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cheese Burst Pizza(180/-)
  		  				<input type="checkbox" name="ck38">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">MBH Veg. Special Pizza(220/-)
  		  				<input type="checkbox" name="ck39">
  		  				<span class="check"></span>
      					</label>
      				</div>
      				<button id="nonveg" type="button" class="btn btn-danger menu" data-toggle="collapse" data-target="#demo12">NON-VEG</button>
      				<div id="demo12" class="collapse menu">
      					<label class="checkbox">Plain Chicken Pizza(140/-)
  		  				<input type="checkbox" name="ck40">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Masala Pizza(160/-)
  		  				<input type="checkbox" name="ck41">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Classic Chicken Pizza(170/-)
  		  				<input type="checkbox" name="ck42">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Maxican Chicken Pizza(180/-)
  		  				<input type="checkbox" name="ck43">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Tikka Pizza(220/-)
  		  				<input type="checkbox" name="ck44">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Cheese Burst Pizza(220/-)
  		  				<input type="checkbox" name="ck45">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">MBH Chicken Special Pizza(260/-)
  		  				<input type="checkbox" name="ck46">
  		  				<span class="check"></span>
      					</label>
      				</div>
    			</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo2">SANDWICH</button>
  		  		<div id="demo2" class="collapse">
      				<button id="veg" type="button" class="btn  btn-success menu" data-toggle="collapse" data-target="#demo21">VEG</button>
      				<div id="demo21" class="collapse menu">
      					<label class="checkbox">Veg. Sandwich(60/-)
  		  				<input type="checkbox" name="ck47">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cheese Sandwich(70/-)
  		  				<input type="checkbox" name="ck48">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Paneer Sandwich(90/-)
  		  				<input type="checkbox" name="ck49">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Super Sandwich(110/-)
  		  				<input type="checkbox" name="ck50">
  		  				<span class="check"></span>
      					</label>
      				</div>
      				<button id="nonveg" type="button" class="btn btn-danger menu" data-toggle="collapse" data-target="#demo22">NON-VEG</button>
    				<div id="demo22" class="collapse menu">
    					<label class="checkbox">Egg Sandwich(40/-)
  		  				<input type="checkbox" name="ck51">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Basic Sandwich(80/-)
  		  				<input type="checkbox" name="ck52">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Cheese Sandwich(90/-) 
  		  				<input type="checkbox" name="ck53">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Classic Sandwich(110/-)
  		  				<input type="checkbox" name="ck54">
  		  				<span class="check"></span>
      					</label>
    				</div>
    			</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo3">STARTER</button>
  		  		<div id="demo3" class="collapse">
      				<button id="veg" type="button" class="btn btn-success menu" data-toggle="collapse" data-target="#demo31">VEG</button>
      				<div id="demo31" class="collapse menu">
      					<label class="checkbox">French Fries(50/-)
  		  				<input type="checkbox" name="ck55">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Masala Fries(70/-)
  		  				<input type="checkbox" name="ck56">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chilli Garlic Pops(70/-)
  		  				<input type="checkbox" name="ck57">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Super Veggie(70/-)
  		  				<input type="checkbox" name="ck58">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Veg. Savoury(80/-)
  		  				<input type="checkbox" name="ck59">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Veg. Nuggets(80/-)
  		  				<input type="checkbox" name="ck60">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cheese Shot(100/-)
  		  				<input type="checkbox" name="ck61">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Veg. Strips(4 pcs)(40/-)
  		  				<input type="checkbox" name="ck62">
  		  				<span class="check"></span>
      					</label>
      				</div>
      				<button id="nonveg" type="button" class="btn btn-danger menu" data-toggle="collapse" data-target="#demo32">NON-VEG</button>
    				<div id="demo32" class="collapse menu">
    					<label class="checkbox">Chicken Pops(100/-)
  		  				<input type="checkbox" name="ck63">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Juicy(100/-)
  		  				<input type="checkbox" name="ck64">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Salad(130/-)
  		  				<input type="checkbox" name="ck65">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Wings(6 pcs)(100/-)
  		  				<input type="checkbox" name="ck66">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Legs(2 pcs)(120/-)
  		  				<input type="checkbox" name="ck67">
  		  				<span class="check"></span>
      					</label>
    				</div>
    			</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo4">TORTILLA WRAPS (ROLLS)</button>
  		  		<div id="demo4" class="collapse">
      				<button id="veg" type="button" class="btn btn-success menu" data-toggle="collapse" data-target="#demo41">VEG</button>
      				<div id="demo41" class="collapse menu">
      					<label class="checkbox">Veg Tortilla Wrap(99/-)
  		  				<input type="checkbox" name="ck68">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Paneer Tortilla Wrap(119/-)
  		  				<input type="checkbox" name="ck69">
  		  				<span class="check"></span>
      					</label>
      				</div>	
      				<button id="nonveg" type="button" class="btn btn-danger menu" data-toggle="collapse" data-target="#demo42">NON-VEG</button>
    				<div id="demo42" class="collapse menu">
    					<label class="checkbox">Egg Tortilla Wrap(99/-)
  		  				<input type="checkbox" name="ck70">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Tortilla Wrap(139/-)
  		  				<input type="checkbox" name="ck71">
  		  				<span class="check"></span>
      					</label>
    				</div>
    			</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo5">PASTA</button>
  		  		<div id="demo5" class="collapse menu">
  		  				<label class="checkbox">Red Sauce Pasta(90/-)
  		  				<input type="checkbox" name="ck72">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">White Sauce Pasta(90/-)
  		  				<input type="checkbox" name="ck73">
  		  				<span class="check"></span>
      					</label>
      			</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo6">MOCKTAIL</button>
  		  		<div id="demo6" class="collapse menu">
      					<label class="checkbox">Blue Caracao(60/-)
  		  				<input type="checkbox" name="ck74">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Blood Orange(60/-)
  		  				<input type="checkbox" name="ck75">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Green Mint(60/-)
  		  				<input type="checkbox" name="ck76">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Passion Fruit(60/-)
  		  				<input type="checkbox" name="ck77">
  		  				<span class="check"></span>
      					</label>
  		  		</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo7">COFFEE & DRINKS</button>
  		  		<div id="demo7" class="collapse menu">
      					<label class="checkbox">Hot Coffee(30/-)
  		  				<input type="checkbox" name="ck78">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Black Coffee(30/-)
  		  				<input type="checkbox" name="ck79">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Cold Coffee(70/-)
  		  				<input type="checkbox" name="ck80">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Soft Drinks(20/-)
  		  				<input type="checkbox" name="ck81">
  		  				<span class="check"></span>
      					</label>
  		  		</div>
    		</div>
			<div>
				<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo8">SHAKES</button>
  		  		<div id="demo8" class="collapse menu">
      					<label class="checkbox">Vanilla Shake(70/-)
  		  				<input type="checkbox" name="ck82">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chocolate Shake(70/-)
  		  				<input type="checkbox" name="ck83">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Strawberry Shake(70/-)
  		  				<input type="checkbox" name="ck84">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Butter Scotch Shake(70/-)
  		  				<input type="checkbox" name="ck85">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Mango Shake(70/-)
  		  				<input type="checkbox" name="ck86">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Black Current Shake(70/-)
  		  				<input type="checkbox" name="ck87">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Pineapple Shake(70/-)
  		  				<input type="checkbox" name="ck88">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Kiwi Shake(70/-)
  		  				<input type="checkbox" name="ck89">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Mix Cream Shake(80/-)
  		  				<input type="checkbox" name="ck90">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Oreo Shake(70/-)
  		  				<input type="checkbox" name="ck91">
  		  				<span class="check"></span>
      					</label>
  		  		</div>
    		</div>
    		<div>
    			<button type="button" class="btn  name" data-toggle="collapse" data-target="#demo9">Combo's</button>
    			<div id="demo9" class="collapse menu">
    			<button type="button" class="btn menu" data-toggle="collapse" data-target="#demo91" style="font-size:1.238em;font-weight:300;">Single Combo</button>
    			<div id="demo91">
      					<label class="checkbox">Light Burger + French Fries + Soft Drink(99/-)
  		  				<input type="checkbox" name="ck92">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Lighter + 2 Wings + Soft Drink(129/-)
  		  				<input type="checkbox" name="ck93">
  		  				<span class="check"></span>
      					</label>
    			</div>
    			<button type="button" class="btn menu" data-toggle="collapse" data-target="#demo92" style="font-size:1.238em;font-weight:300;">Family Combo</button>
    			<div id="demo92">
      					<label class="checkbox">Miller Burger + Paneer Burger + 5 pcs Strip + Half Nuggets + Soft Drink(199/-)
  		  				<input type="checkbox" name="ck94">
  		  				<span class="check"></span>
      					</label>
      					<label class="checkbox">Chicken Miller Burger + Egg Burger + 2 Leg pcs + 3 pcs Wings + Soft Drink(299/-)
  		  				<input type="checkbox" name="ck95">
  		  				<span class="check"></span>
      					</label>
    			</div>
    			<button type="button" class="btn menu" style="font-size:1.238em;font-weight:300;">Regular Combo</button>
    		</div>
		</div>
		<div>
                <button type="submit" class="btn btn-success name" name="menu_sub-btn">Submit</button>
        </div>
    </div>
    
</form>




</body>
</html>
