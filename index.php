<html>
<head>
<title>PHP Demo</title>
<style>
body, html {
	width: 100%;
	height: 100%;
	margin: 0;
}

.container {
	width: 100%;
	height: 100%;
	/*background-color: black;*/
}

.left{
    width: 25%;
    height: 85%;
    float: left;
    display: block;
    /*background-color: red;*/
    border-collapse: collapse;
}

.middle {
    width: 70%;
    height: 85%;
    float: left;
    /*background-color: blue;*/
    border-collapse: collapse;
}

.right {
	width: 30%;
	height: 85%;
	position: relative;
	float: right;
	background-color: yellow;
	border-collapse: collapse;
}

.top {
	width: 100%;
	height: 15%;
	border-collapse: collapse;
	/*background-color: green;*/
}
a.box{
	text-decoration: none;
}
a div.box {
	width: 100%;
	font-size: 25px;
	color: red;
	text-align: center;
	line-height: 50px;
	vertical-align: middle;
	border-collapse: collapse;
	/*background-color: green;*/
}
a:hover div.box{
	font-size: 30px;
}
a:active div.box{
	color: black;
}
div p.para{
	font-size: 15px;
	text-indent: 30px;
}

</style>
<script>
function onOpen()
{
	document.getElementsByName("theFrame")[0].src="files2.php";
}
function onWrite()
{
	document.getElementsByName("theFrame")[0].src="files3.php";
}
function onSort()
{
	document.getElementsByName("theFrame")[0].src="sort.php";
}
function onSuperGlobals()
{
	document.getElementsByName("theFrame")[0].src="superglobal.php";
}
function onFile()
{
	document.getElementsByClassName("left")[0].innerHTML='<h2 align="center">Menu:</h2><a onclick="onSort()" class="box"><div class = "box" style="cursor: pointer;" >Sort</div></a><a onclick="onSuperGlobals()" class="box"><div class = "box" style="cursor: pointer;" >Super Gobals</div></a><a onclick="onFile()" class="box"><div class = "box" style="cursor: pointer;" >File Handling</div></a><a onclick="onCreate()" class="box"><div class = "box" style="cursor: pointer;" >1. Create</div></a><a onclick="onOpen()" class="box"><div class = "box" style="cursor: pointer;" >2. Open</div></a><a onclick="onWrite()" class="box"><div class = "box" style="cursor: pointer;" >3. Write</div></a>';
}
function onCreate()
{
	document.getElementsByName("theFrame")[0].src="files.php";
}
</script>
</head>
<body>
<div class="container" >
  <div class="top">
	<h1 align="center">Welcome to PHP program:</h1>
  </div>
  <div class="left">
	<h2 align="center">Menu:</h2>
	<a onclick="onSort()" class="box"><div class = "box" style="cursor: pointer;" >Sort</div></a>
	<a onclick="onSuperGlobals()" class="box"><div class = "box" style="cursor: pointer;" >Super Gobals</div></a>
	<a onclick="onFile()" class="box"><div class = "box" style="cursor: pointer;" >File Handling</div></a>
  </div>
  <div class="middle" align="center">
	<iframe name = "theFrame" src="sort.php" frameborder="0" style="width:100%; height:100%;"></iframe>
  </div>
</body>
</html>
