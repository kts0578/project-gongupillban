<html>
<head>
<style>

#table2{
	background-color : rgb(255,255,255);
	font-size : 30px;
	padding: 0px 0px 0px 0px;
	margin-bottom: -200px;
	
}
#table1{
	font-size : 40px;
}
body{
	font-family: 'Open Sans', sans-serif;
}
table{
	border:2px solid #ccc;
	padding: 0px 0px 0px 0px;
	margin: -1px -1px -1px -1px;
	
	margin: 0 auto;
}
th{
	color : white;
	
	background-color : rgb(100,100,100);
}
tr:nth-child(2n-1){
	background-color: rgba(224, 235, 255, 0.8);
}
tr:nth-child(2n){
	background-color: white;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://www.nihilogic.dk/labs/canvas2image/canvas2image.js"></script>
  
<SCRIPT LANGUAGE="JavaScript">

function  html2img(){
  var canvas ="";
  html2canvas($("#SavePart"), {
  onrendered: function(canvas) {
  // canvas is the final rendered <canvas> element
   document.getElementById("theimage").src = canvas.toDataURL();
     Canvas2Image.saveAsPNG(canvas);
  }
  });
  //alert(document.getElementById("SavePart").innerHTML);
}

</SCRIPT>
 


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<image id="theimage"></image>

<FORM>
  <INPUT type='BUTTON' value='이미지 변환' onclick='html2img()'> <!-- 버튼 클릭 이벤트-->
</FORM>

<?php
	$angle=array("π/6","π/4","π/3","π/2","2π/3","3π/4","5π/6","π","7π/6","5π/4","4π/3","3π/2","5π/3","7π/4","11π/6");
	$arr_sin=array("1/2","1/√2","√3/2","1","√3/2","1/√2","1/2","0","-1/2","-1/√2","-√3/2","-1","-√3/2","-1/√2","-1/2");
	$arr_cos=array("√3/2","1/√2","1/2","0","-1/2","-1/√2","-√3/2","-1","-√3/2","-1/√2","1/2","0","1/2","1/√2","√3/2");
	$arr_tan=array("1/V3","1","V3","-V3","-1","-1/V3","0");
	$array_store=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	
	$i=0;
	$j=0;
	echo "<div id =","SavePart",">";
	echo "<table id="."table2".">";
	echo"<thead>";
	echo "<th><h1>외우자 삼각함수!</h1></th>";
	echo"</thead>";
	echo "</table>";
	
	echo "<table id=","table1",">";
	echo"<thead>";
	echo "<th>삼각함수</th><th>값</th><th>삼각함수</th><th>값</th>";
	echo"</thead>";
	echo "<tbody>";
		for($i=0;$i<10;$i++){
			echo "<tr>";
			for($j=0;$j<2;$j++){
			
			$x=mt_rand(0,2);
			$k=$i*2+$j;
			switch ($x){
				case 0:
				$y=mt_rand(0,14);
				echo "<td>sin ".$angle[$y]."</td>";
				$array_store[$k]=$arr_sin[$y];
				break;
				
				case 1:
				$y=mt_rand(0,14);
				echo "<td>cos ".$angle[$y]."</td>";
				$array_store[$k]=$arr_cos[$y];
				break;
				
				case 2:
				default:
				$y=mt_rand(0,6);
				echo "<td>tan ".$angle[$y]."</td>";
				$array_store[$k]=$arr_cos[$y];
			}
			echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			//echo "<td>=&emsp;&emsp;&emsp;&emsp;</td>";
			//echo"<td>=&ensp;&ensp;&ensp;&ensp;</td>";
		}
		echo "</tr>";
		echo "<br>";
	}
	echo "</tbody>";
	echo "</table>";
	echo "<br>";echo "<br>";
	echo "<table >";
	echo "<tr>";
	for($i=0;$i<20;$i++){
	
	}
	for($i=0;$i<20;$i++){
		echo "<td>",$i+1,".</td><td>",$array_store[$i],"</td>";
		if(($i+1)%10==0) {echo "</tr><tr>";}
	}
	echo "</tr></table>";
	echo "</div>"
	?>
	<form action="array_store.php" method="post">
	<input type="hidden" value="2">
	<input type="submit" value="reset">
	</form>
	
	<a href="index.html" id="pic1">
	<input type="button" value="back">
	</a>

</body>
</html>

<!-- 
function print_trifunc(){
		$x=mt_rand(0,2);
		
		switch ($x){
		case 0:
		$y=mt_rand(0,15);
		return "sin".$angle[$y]."=               <br>";
		break;
		case 1:
		$y=mt_rand(0,15);
		return "cos".$angle[$y]."=               <br>";
		default:
		$y=mt_rand(0,6);
		return "tan".$angle[$y]."=               <br>";
		}
	}
	echo print_trifunc();

-->


<!--
for($i=0;$i<10;$i++){
			for($j=0;$j<2;$j++){
			$x=mt_rand(0,2);
			$k=$i*2+$j;
			switch ($x){
				case 0:
				$y=mt_rand(0,14);
				echo "sin".$angle[$y]."=____________";
				$array_store[$k]=$arr_sin[$y];
				break;
				
				case 1:
				$y=mt_rand(0,14);
				echo "cos".$angle[$y]."=____________";
				$array_store[$k]=$arr_cos[$y];
				break;
				
				case 2:
				default:
				$y=mt_rand(0,6);
				echo "tan".$angle[$y]."=____________";
				$array_store[$k]=$arr_cos[$y];
			}
			echo "------";
		}
		echo "<br><br>";
	}
	for($i=0;$i<20;$i++){
		echo $i+1,". ",$array_store[$i]," "," "," ";
		if($i==9) {echo "<br>";}
	}
-->