
<?php
try{
   include("config.php");
 $nameErr="";
$passwordErr="";
$ageErr="";
$idErr="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
//sign in
       $myusername =$_POST['name'];
      $mypassword =$_POST['password']; 
       
       $id=$_POST['id'];
       
       if(empty($myusername)){
           $nameErr = "تکایه ناو داخڵ بکه";   
       }
       else{
 $myusername = trim($myusername);

$myusername = stripslashes($myusername);

$myusername = htmlspecialchars($myusername);
}
       
      if(empty($password)) {
          $passwordErr = "تکایه پاسۆرد داخڵ بکه";
      }
       else{
             $myusername = trim($mypassword);

$mypassword = stripslashes($mypassword);

$mypassword = htmlspecialchars($mypassword); 
       }
       
          
      
      $sql = "SELECT * FROM loginnn WHERE username = '$myusername' and pass = '$mypassword' ";
$result = $conn->query($sql);     
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
        $sqlu = "SELECT * FROM loginnn";
$resultu = $conn->query($sqlu);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
       
		
      if($count >0) {
        if($myusername=="admin"&&$mypassword=="123456789"){
         $_SESSION['login_user'] = $myusername;
         
                      header("location: admin.php");}
else{
         while($row=mysqli_fetch_array($resultu)){
             if($row[3]>=18){
             if($row[1]==$myusername && $row[2]==$mypassword){
                 
                 header("location: user.php");
                      setcookie("r", $row[1], time()+60, "/","", 0);

             }
         }else if($row[3]<18){
                echo "<script type=\"text/javascript\">window.alert('Your age is not above 18 year.');</script>"; 

             }
           
         }
      } 
      }

       
       //sign Up for users
          if($_SERVER["REQUEST_METHOD"] == "POST") {

       if(empty($_POST["user"])){
           $nameErr = "تکایه ناو داخڵ بکه";
      }if(empty($_POST["PASS"])){
          
                     $passwordErr = "تکایه پاسۆرد داخڵ بکه";
          }
              
      
     
    if(empty($_POST["age"])){
          
                     $ageErr = "تکایه ته مه ن داخڵ بکه";
          }
              
       
      if(empty($_POST["id"])){
          
                     $idErr = "تکایه ئایدی داخڵ بکه";
          }
              
                   $pass=strlen($_POST["PASS"]);
                    if($pass<8){
          echo "<script type=\"text/javascript\">window.alert('پاسۆرد نابێت له 9 ژماره که متر بێت');</script>";        
              }
               
    else{
        
if(isset($_POST['signUp'])){

        
              
      
    mysqli_select_db($conn,$dbname);

   $sql = "INSERT INTO loginnn(id,username,pass,age)
VALUES('".$_POST["id"]."','".$_POST["user"]."','".$_POST["PASS"]."','".$_POST["age"]."')"; 
    
    mysqli_query($conn,$sql);
    
   
              
    echo "<script type=\"text/javascript\">window.alert('register successfull');</script>";

}
    
    }
        if(isset($_POST["test"])){
            header("location:meerrr.php");
}  
              
              if(isset($_POST["information"])){
                  header("location:defineXML.php");
      
              }
          }
   }
}catch(exception $m){
    echo 'failed : ' .$e->getMessage();
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Login Form</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
           

<form method="post">
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
      

        <label for="tab-1" class="tab">داخڵ بوون</label>
        
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">خۆ تۆمارکردن</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
                    <span class = "error"> <?php echo $nameErr;?></span>
					<label for="user" class="label">ناو</label>
					<input id="user" type="text" class="input" name="name">
				   </div>
				<div class="group">
                    <span class = "error"> <?php echo $passwordErr;?></span>
					<label for="pass" class="label">پاسۆرد</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<br><br>
				<div class="group">
					<input type="submit" class="button" value="چوونه ژووره وه" name="sub">
				</div>
                <hr>
                <div class="group">
					<input type="submit" class="button" value="گه ڕان به دوای ناوه که ت" name="test">
                    <hr>
				</div >
                <div class="group">
                
             <input type="submit" class="button" value="زانیاری ده رباره ی ده نگدان" name="information">

                </div>
                
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">سیسته می ده نگدان</a>
				</div>
			</div>
            
			<div class="sign-up-htm">
				<div class="group">
              <span class = "error"> <?php echo $nameErr;?></span>

					<label for="user" class="label">ناو</label>
					<input id="user" type="text" class="input" name="user">
				</div>
				<div class="group">
                    <span class = "error"> <?php echo $passwordErr;?></span>

					<label for="pass" class="label">پاسۆرد</label>
					<input id="pass" type="password" class="input" data-type="password" name="PASS">
				</div>
				
				<div class="group">
                  <span class = "error"> <?php echo $ageErr;?></span>

					<label for="pass" class="label">ته مه ن</label>
					<input id="pass" type="text" class="input" name="age">
				</div>
                <div class="group">
                    <span class = "error"> <?php echo $idErr;?></span>
					<label for="pass" class="label">ئایدی</label>
					<input id="pass" type="number" class="input" data-type="password" name="id">
				</div>
				<div class="group">
					<input type="submit" class="button" value="تۆمارکردن" name="signUp">
				</div>
				<div class="hr"></div>
				
		</div>
	</div>
</div>
    </div>
    </form>
  

</body>

</html>

