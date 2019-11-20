<?php
$nameErr=$snameErr="";
   include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST["hizb"])){
           $nameErr = "تکایه حیزبێک هه ڵبژێره";
      }if(empty($_POST["candid"])){
          
                     $snameErr = "تکایه کاندیدێک هه ڵبژێره";
          }
    else{
if(isset($_POST['sub'])){

    mysqli_select_db($conn,$dbname);

   $sql = "INSERT INTO q (qawara,numbers)
VALUES('".$_POST["hizb"]."','".$_POST["candid"]."')"; 
    
    mysqli_query($conn,$sql);
    
    $sqll="INSERT INTO c  (numbers)
VALUES('".$_POST["candid"]."')"; 
    
        mysqli_query($conn,$sqll);

    echo "<script type=\"text/javascript\">window.alert('ده نگتدا به سه رکه وتوی');</script>";
   
}}
      
}

?>

<html>

<head>    
    
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style1.css">
    
    </head>

<body>
   <form method="post">
    
    <div class="title">
       <img src="comsion.jpg" width="150px" class="imageContainer"  > 
        
        <pre>
  کۆمسیۆنی باڵای سەربەخۆی هەڵبژاردن و ڕاپرسی            
</pre>
        
        </div>
        
    <br>
   
    <div class="user">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                

        <label for="tab-1" class="tab">قه واره کان</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
                    <br>
					 <span class = "error"> <?php echo $nameErr;?></span>
                    <br><hr><br>
<img src="yakety.jpg" width="25px">	<input value="yakety"  type="radio"  name="hizb" selected="selected">یه کێتی
                    
				</div>
				<div class="group">
                    
<img src="party.jpg" width="25px">	<input value="party"  type="radio"   name="hizb" selected=selected>پارتی
				</div>
				<div class="group">
                    
<img src="goran.jpg" width="25px">	<input value="goran"   type="radio"   name="hizb" selected=selected>گۆڕان
				</div>
                <div class="group">
                    
<img src="yakgrtw.jpg" width="25px"><input value="yakgrtw"  type="radio"   name="hizb" selected=selected>یه کگرتوو
				</div>
                 <div class="group">
                    
<img src="komal.jpg" width="25px">	<input value="komal"  type="radio"   name="hizb" selected=selected>کۆمه ڵ
				</div>
				
              
				<div class="hr"></div>
							 <div class="group">
				       <h2><button class="button"><a href = "logout.php">ده رچوون</a></button></h2>

				</div>
			</div>
			
		</div>
	</div>
</div>
    
    
    
    

      <div class="user2">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                

        <label for="tab-1" class="tab">کاندیده کان </label>
        

		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">

				<div class="group">
                                    <span class = "error"> <?php echo $snameErr;?></span>

                    <br>
					
                    
                    <br><hr><br>
					 1.<input  type="radio" value="1"  name="candid" selected="selected">
                    
				</div>
                <br><br>
				<div class="group">
                    
					2.<input  type="radio" value="2"    name="candid" selected=selected>
				</div>
                <br><br>
				<div class="group">
                    
					3.<input  type="radio" value="3"    name="candid" selected=selected>
				</div>
                <br><br>
                <div class="group">
                    
					4.<input  type="radio" value="4"   name="candid" selected=selected>
				</div>
				 
                <br><br>
              
				
			</div>
			 <div class="group">
					<input type="submit" class="button" value="ده نگ بده" name="sub">
				</div>
		</div>
	</div>
         
</div>
      
      
    </form>
    </body>




</html>







