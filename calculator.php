<!DOCTYPE html>
<html>
<head>
<style>
.outer{
background-color:#87CEEB;
width:100%;
padding:8%;
}
.inner{
background-color:#8A2BE2;
width:70%;
padding:10px;
margin= 0 auto;
display:inline-block;

}
.column1{
float:right;
width:50%;
padding:10px;}
.app-form-bottom{
	margin=3px;
padding=2px;}
.app-form-group{
	margin:3px;
padding:2px;}
.select-style{
	margin:3px;
padding:2px;}
.app-form-group-showdata{
	color:#FFFFFF;
}
.app-form-control{
background-color:#CC99FF;}
.app-form-button{
background-color:#DEB887;}
.column2{
width:50%;
padding:10px;
color:#FFCCFF;
animation-name: example;
animation-duration: 5s;
}
@keyframes example{
	from{
	color:#FFCCFF;}
	to{
	color:orange;}
	
</style>
<head>
<body>
<div class="outer">
<div class="inner">
<div class="column1">
<form method="POST">
<div class="app-form-group">
<input type="text" class="app-form-control" placeholder="Enter first number" name="num1">
</div>
<div class="app-form-group">
<input type="text" class="app-form-control" placeholder="Enter second number" name="num2">
</div>
<div class="select-style">
<select name="operation" class="app-form-control">
<option value="add"><strong>ADD</strong></option>
<option value="subtract"><strong>SUBTRACT</strong></option>
<option value="multiply"><strong>MULTIPLY</strong></option>
<option value="divide"><strong>DIVIDE</strong></option>
</select>
</div>
<div>
<input type="submit" name="submit" value="submit" class="app-form-button">
</div>
</form>
</div>
<div class="column2">
<h1> Calculator</h1>
</div>
<div class="app-form-group-showdata">
<p>
<?php
if(isset($_POST['submit'])){
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operation=$_POST['operation'];
switch($operation){
case "add":
$sum=$num1+$num2;
echo "result= $sum";
break;
case "subtract":
$sub=$num1-$num2;
echo"result= $sub";
break;
case "multiply":
$mult= $num1*$num2;
echo "result = $mult";
break;
case "divide":
$div=$num1/$num2;
echo "result= $div";
break;
}
}
?>
</p>
</div>
</div>
</div>
</body>
</html>







