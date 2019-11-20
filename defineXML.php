
<?php
//Reading XML using the XAM(Simple API for XML) parser
$tutors = array();
$elements = null;
// Called to this function when tags are opened
function startElements($parser, $name, $attrs) {
global $tutors, $elements;
if(!empty($name)) {
if ($name == 'COURSE') {
// creating an array to store information
$tutors []= array();
}
$elements = $name;
}
}
// Called to this function when tags are closed
function endElements($parser, $name) {
global $elements;
if(!empty($name)) {
$elements = null;
}
}
// Called on the text between the start and end of the tags
function characterData($parser, $data) {
global $tutors, $elements;
if(!empty($data)) {
if ($elements == 'TITLE' || $elements == 'COUNTRY' || $elements == 'INFORMATION' || $elements == 'INFORMATION2' || $elements == 'INFORMATION3' ) {
$tutors[count($tutors)-1][$elements] = trim($data);
}
}
}
// Creates a new XML parser and returns a resource handle referencing it to be used by the other XML functions.
$parser = xml_parser_create();
xml_set_element_handler($parser, "startElements", "endElements");
xml_set_character_data_handler($parser, "characterData");
// open xml file
if (!($handle = fopen('election.xml', "r"))) {
die("could not open XML input");
}
while($data = fread($handle, 4096)) // read xml file
{
xml_parse($parser, $data); // start parsing an xml document
}
xml_parser_free($parser); // deletes the parser
$i = 1;
foreach($tutors as $course) {
   echo "<pre>";
echo "<b> زانیاری ده نگدان </b><br><br><br><br> ";
    
echo "<b>" .$course['COUNTRY']."</b>"." :<b> وڵات </b>  ".'<br/><br><br>';
echo "<b>چۆنێتی ده نگدان</b> ".$course['TITLE'].'<br/><br><br>';
    
echo "<b>".$course['INFORMATION']."</b>".'<br/><br>';
    
echo "<b>".$course['INFORMATION2']."</b>".'<br/> <br>';
    
    
echo "<b><pre>".$course['INFORMATION3']."</pre></b>".'<br/>';

echo "</pre>";
$i++;
}

if(isset($_POST['exit'])){
    header("location:login.php");
}
?>

<html>
<head>
    <style>
        body.body{
            background-color: gray;
            border-style:inset;
            padding-left: 7px;
            padding-top: 10px;
            font-size:20px;
        }
        .button{
     width:100%;
	color:#fff;
	display:block;
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
        .button:hover{
opacity: 0.8;
            background-color: floralwhite;
            border-style:  inherit;
        }
        
    </style>
    
    
    </head>
      
<body class="body">
    <div class="exitt">
        <h2><button class="button" ><a href = "logout.php">ده رچوون</a></button></h2>
    </div>
    </body>


</html>