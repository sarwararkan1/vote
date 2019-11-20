<?php

ob_start();
include("config.php");
  //yakety
      $yakety = "SELECT * FROM q where qawara='yakety' ";
      $yaketyy = $conn->query($yakety); 
      $yaketyyy = mysqli_num_rows($yaketyy);
    //party
   $party = "SELECT * FROM q where qawara='party' ";
      $partyy = $conn->query($party); 
      $partyyy = mysqli_num_rows($partyy);
 //goran
 $goran = "SELECT * FROM q where qawara='goran' ";
      $gorann = $conn->query($goran); 
      $gorannn = mysqli_num_rows($gorann);
//yakgrtw
 $yakgrtw= "SELECT * FROM q where qawara='yakgrtw' ";
      $yakgrtww = $conn->query($yakgrtw); 
      $yakgrtwww = mysqli_num_rows($yakgrtww);
//komal
 $komal= "SELECT * FROM q where qawara='komal' ";
      $komall = $conn->query($komal); 
      $komalll = mysqli_num_rows($komall);

// yakety candidi 1
$c1 = "SELECT * FROM q where qawara='yakety' and numbers=1 ";
      $cc1 = $conn->query($c1); 
      $ccc1 = mysqli_num_rows($cc1);
//yakety candidi 2
$c2 = "SELECT * FROM q where qawara='yakety' and numbers=2 ";
      $cc2 = $conn->query($c2); 
      $ccc2 = mysqli_num_rows($cc2);

//yakety candidi 3

$c3 = "SELECT * FROM q where qawara='yakety' and numbers=3 ";
      $cc3 = $conn->query($c3); 
      $ccc3 = mysqli_num_rows($cc3);

//yakety candidi 4

$c4 = "SELECT * FROM q where qawara='yakety' and numbers=4 ";
      $cc4 = $conn->query($c4); 
      $ccc4 = mysqli_num_rows($cc4);
?>

<html>
   
   <head>
       
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts 
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['گۆڕان', <?php echo $gorannn; ?>],
  ['یه کگرتوو', <?php echo $yakgrtwww; ?>],
  ['پارتی', <?php echo $partyyy; ?>],
  ['یه کیتی', <?php echo $yaketyyy; ?>],
  ['کۆمه ڵ', <?php echo $komalll; ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'ڕێژه ی ده نگه کان به چارت', 'width':1200, 'height':400,backgroundColor:"dimgray"};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
       
       
       <script type="text/javascript">
// Load google charts 
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['کاندیدی 1', <?php echo $ccc1; ?>],
  ['کاندیدی 2', <?php echo $ccc2; ?>],
  ['کاندیدی 3', <?php echo $ccc3; ?>],
  ['کاندیدی 4', <?php echo $ccc4; ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'ڕێژه ی ده نگه کان یه کێتی', 'width':550, 'height':400,backgroundColor:"dimgray"};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}
</script>
       
      <title>Admin </title>
       
       <style>
           .chart{
               float: left;
               padding-top: 100px;
           }
           .chart{
               padding-top: 60px;
              padding-left: 400px;
               
}
           button {
    background-color: dodgerblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
               font-size: 100%;
}
           pre{
               float: right;
               font-size: 30px;
               margin: 10px 10px 10px 10px;
               font-family: fantasy;
               
           }   
           .imageContainer{
               border-radius: 4px;
           }
           
           .table{
               background-color: gray;
               font-family:cursive;

           }
           body{
               background-color: dimgray;
           }
           .a:hover{
              background-color:  darkred;
               
               opacity: 0.8;
           }
           
           
           .button{
     width:100%;
	color:#fff;
    border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
            background-color: gray;
            font-size: 20px;
            border-style: inset;
            border-color: black;
        
        
        }
           
           a{
               text-decoration: none;
               color: black;
           }
       </style>
       
       
         
   </head>
   
   <body >
       
       
        <div >
       <img src="comsion.jpg" width="150px" class="imageContainer"  > 
        <pre>کۆمسیۆنی باڵای هه ڵبژاردنه کان</pre>
        
        </div>
        <div class="exitt">
        <h2><button class="button" ><a href = "logout.php">ده رچوون</a></button></h2>
    </div>
<br><br>
<table width="1240"  border="4" border-radius="3px" cellspacing="4" cellpadding="8" class="table">

<tr>
 <td align="center" class="a"><strong > عام</strong></td>
<td align="center" class="a"><strong >یه کێتی</strong></td>
<td align="center" class="a"><strong>پارتی</strong></td>
<td align="center" class="a"><strong>گۆڕان</strong></td>
<td align="center" class="a"><strong>یه کگرتوو</strong></td>
<td align="center" class="a"><strong>کۆمه ڵ</strong></td>

    </tr>  
    <tr>
 <td align="center" class="a"><strong>ڕێژه ده نگه کان</strong></td>
<td align="center" class="a"><strong><?php echo $yaketyyy; ?></strong></td>
<td align="center" class="a"><strong><?php echo $partyyy; ?></strong></td>
<td align="center" class="a"><strong><?php echo $gorannn; ?></strong></td>
<td align="center" class="a"><strong><?php echo $yakgrtwww; ?></strong></td>
<td align="center" class="a"><strong><?php echo $komalll; ?></strong></td>

    </tr> 
    </table>
    <br><br><br>
       
       <table width="1240"  border="4" cellspacing="4" cellpadding="8" class="table">

<tr>
 <td align="center" class="a"><strong>یه کێتی</strong></td>
<td align="center" class="a"><strong>کاندیدی 1</strong></td>
<td align="center" class="a"><strong>کاندیدی 2</strong></td>
<td align="center" class="a"><strong>کاندیدی 3</strong></td>
<td align="center" class="a"><strong>کاندیدی 4</strong></td>

    </tr>  
    <tr>
 <td align="center" class="a"><strong>ڕێژه ده نگه کان</strong></td>
<td align="center" class="a"><strong><?php echo $ccc1; ?></strong></td>
<td align="center" class="a"><strong><?php echo $ccc2; ?></strong></td>
<td align="center" class="a"><strong><?php echo $ccc3; ?></strong></td>
<td align="center" class="a"><strong><?php echo $ccc4; ?></strong></td>

    </tr> 
    </table>
       
       <div id="piechart" class="chart"  > </div>
       
       <div id="piechart1" class="chart1"  > </div>

   </body>
   
</html>