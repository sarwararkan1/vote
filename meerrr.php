<html>
<head>
<script>
function showHint(str) {
if (str.length == 0) {
document.getElementById("txtHint").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "gethint.php?q=" + str, true);
xmlhttp.send();
}
}
</script>
    <style>
        .search{
            padding: 40px 400px 70px 500px ;
            font-family: fantasy;
            
        }
        .a{
            border-style: double;
            width: 200px;
           
        }
        .button{
    width:100%;
	color:#fff;
	display:block;
    border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
            background-color: white;
            font-size: 20px;
            border-style: inset;
            border-color: darkblue;
}
        a{
                        text-decoration: none;
            color: darkblue;
            font-size: 30px;
        

        }
        .padd{
            padding-right: 10px;
        }
        .a{
            border-radius: 5px;
        height: 30px;
        }
    </style>
     
</head>
<body>
      

<form>
        <div class="search">

    <p ><b>گه ڕان به دوای ناوه کان له لیستی ده نگده ران</b></p>
<hr>
            <b> <label for="user" class="padd" >ناوی یه که م</label></b>
            
 <input id ="user " type="text" onkeyup="showHint(this.value)" class="a">
            <hr>
           <p><b>لیستی ناوه کان</b>: <span id="txtHint"></span></p>
           <hr> <br>
<div class="group">
        <h2><button class="button" ><a href = "logout.php">ده رچوون</a></button></h2>
    

</div>
            
    </div>
        <img src="check.png">

    <div class="hr"></div>
    
    
    
</form>
       
</body>
</html>