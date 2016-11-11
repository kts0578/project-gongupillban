<html>
<head>
<style>

#table2{
	background-color : rgb(255,255,255);
	font-size : 20px;
	padding: 0px 0px 0px 0px;
	
}
#table1{
	font-size : 30px;
}
body{
	font-family: 'Open Sans', sans-serif;
}
table{
	border:2px solid #ccc;
	padding: 0px 0px 0px 0px;
	margin: -1px -1px -1px -1px;
	font-align : center;
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


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

</head>
<body>
<image id="theimage"></image>

<FORM>
  <INPUT type='BUTTON' value='이미지 변환' onclick='html2img()'> <!-- 버튼 클릭 이벤트-->
</FORM>
<?php
	$angle=array("π/6","π/4","π/3","π/2","2π/3","3π/4","5π/6","π","7π/6","5π/4","4π/3","3π/2","5π/3","7π/4","11π/6");
	$angle_sub=array(2,3,4,6,8,9,10,12,14,15,16,18,20,21,22);
	$cal_angle=array("π/12","π/6","π/4","π/3","5π/12","π/2","7π/12","2π/3","3π/4","5π/6","11π/12","π","13π/12","7π/6","5π/4","4π/3","17π/12","3π/2","19π/12","5π/3","7π/4","11π/6","23π/12","2π"
					,"25π/12","13π/6","9π/4","7π/3","29π/12","5π/2","31π/12","11π/3","11π/4","17π/6","35π/12","3π","37π/12","19π/6","13π/4","10π/3","41π/12","7π/2","43π/12","11π/3","15π/4","23π/6","47π/12","4π");
	$array_store=array();
	echo "<div id =","SavePart",">";
	echo "<table id=","table2",">";
	echo"<thead>";
	echo "<th><h1>외우자 삼각함수!</h1></th>";
	echo"</thead>";
	echo "</table>";
	
	echo "<table id ="."table1".">";
	echo"<thead>";
	echo "<th>삼각함수</th><th>값</th><th>삼각함수</th><th>값</th>";
	echo"</thead>";
	for($i=0;$i<10;$i++){
		echo "<tr>";
		for($j=0;$j<2;$j++){
			$x=mt_rand(1,4);
			echo "<td>";
			switch ($x){
				case 1:
				//sin(a+b)
				$a=mt_rand(0,14);
				$b=mt_rand(0,14);
				$c=$angle_sub[$a]+$angle_sub[$b]-1;
				echo "sin".$angle[$a]."*cos".$angle[$b]." + cos".$angle[$a]."*sin".$angle[$b];
				$array_store[$i*2+$j]=$cal_angle[$c];
				break;

				case 2:
				//sin(a-b)
				$a=mt_rand(0,14);
				$b=mt_rand(0,14);
				while($b>=$a){
					$a=mt_rand(0,14);
					$b=mt_rand(0,14);
					}
				$c=$angle_sub[$a]-$angle_sub[$b]-1;
				echo "sin".$angle[$a]."*cos".$angle[$b]." - cos".$angle[$a]."*sin".$angle[$b];
				$array_store[$i*2+$j]=$cal_angle[$c];
				break;
				
				case 3:
				//cos(a-b)
				$a=mt_rand(0,14);
				$b=mt_rand(0,14);
				while($b>=$a){
					$a=mt_rand(0,14);
					$b=mt_rand(0,14);
					}
				$c=$angle_sub[$a]-$angle_sub[$b]-1;
				echo "cos".$angle[$a]."*cos".$angle[$b]." + sin".$angle[$a]."*sin".$angle[$b];
				$array_store[$i*2+$j]=$cal_angle[$c];
				break;
				
				case 4:
				//cos(a+b)
				$a=mt_rand(0,14);
				$b=mt_rand(0,14);
				while($b>=$a){
					$a=mt_rand(0,14);
					$b=mt_rand(0,14);
					}
				$c=$angle_sub[$a]+$angle_sub[$b]-1;
				echo "cos".$angle[$a]."*cos".$angle[$b]." - sin".$angle[$a]."*sin".$angle[$b];
				$array_store[$i*2+$j]=$cal_angle[$c];
				break;
				default:
			}
			echo "</td>";
			echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
		}
	//	echo "<br>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<table>";echo "<tr>";
	for($i=0;$i<20;$i++){
		echo "<td>",$i+1,". </td><td>",$array_store[$i];
		echo "</td>";
		if($i==9) {echo "</tr><tr>";}
	}
	echo "</tr>";
	echo "</table>";
		echo "</div>"
	?>
	<form action="array_store_2.php" method="post">
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
$arr_sin=array("1/2","1/V2","V3/2","1","V3/2","1/V2","1/2","0","-1/2","-1/V2","-V3/2","-1","-V3/2","-1/V2","-1/2");
	$arr_cos=array("V3/2","1/V2","1/2","0","-1/2","-1/V2","-V3/2","-1","-V3/2","-1/V2","1/2","0","1/2","1/V2","V3/2");
	$arr_tan=array("1/V3","1","V3","-V3","-1","-1/V3","0");
	$array_store=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
		
	$i=0;
	$j=0;
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