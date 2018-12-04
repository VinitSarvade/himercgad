
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Onsite Computer services</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
// Any Text Box for Blank

function validate_txt(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

//for phone number blank
function validate_nbr(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

// Email Validation	
function validate_email(field,alerttxt)
{
with (field)
  {
  digit=/[0-9]/;
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  
  if(value.charAt(0)==digit)
  { alert(alerttxt); return false; }
  
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
	
  else {return true;}
  }
}






// Common function on SUBMIT
function validate_form(thisform)
{
with (thisform)
  {
	  if (validate_txt(txt_fname,"Please enter your first name")==false)
		  	{txt_fname.focus();return false;}
			
	 if (validate_txt(txt_lname,"Please enter your last name")==false)
		  	{txt_lname.focus();return false;}
			
	 if (validate_email(txt_email,"Not a valid e-mail address!")==false)
    		{txt_email.focus();return false;}
	 
	 if (validate_nbr(txt_contact,"Please enter your contact number")==false)
		  	{txt_contact.focus();return false;}			

	
   }
}

function numbersonly(myfield, e, dec)
{
var key;
var keychar;

if (window.event)
   key = window.event.keyCode;
else if (e)
   key = e.which;
else
   return true;
keychar = String.fromCharCode(key);

// control keys
if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) )
   return true;

// numbers
else if ((("0123456789").indexOf(keychar) > -1))
   return true;

// decimal point jump
else if (dec && (keychar == "."))
   {
   myfield.form.elements[dec].focus();
   return false;
   }
else
   return false;
}

</script>   
</head>

<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="registration.html">Hattaraki Institution</a></h1>
      
    </div>
    <!-- end div#logo -->
  </div>
  <!-- end div#header -->

<!--<div id="menu">
  
   <?php include("top_menu.php"); ?>
   
</div>-->

  <!--<div id="splash"><img src="images/img04.gif" width="940" height="150" alt=""/></div>-->
  <div id="header-search">
    
  </div>
  <!-- end div#menu -->
  <div id="page">
    <div id="page-bgtop">
      <div id="content">
 <!-- add content here -->     
		<div class="post">
<center>		
<form name="form1"  method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>" onSubmit="return validate_form(this);">
        <table width="470" height="367" border="0" align="center">
  <tr>
    <td><div align="right">First Name</div></td>
    <td>
      <div align="center">
        <input type="text" name="txt_fname" size="30" >
      </div></td>
  </tr>
  <tr>
    <td><div align="right">Last Name</div></td>
    <td>
      <div align="center">
        <input type="text" name="txt_lname" size="30">
      </div></td>
  </tr>
  <tr>
    <td><div align="right">Email</div></td>
    <td>
      <div align="center">
        <input type="text" name="txt_email" size="30" />
      </div></td>
  </tr>
  <tr>
    <td><div align="right">Contact</div></td>
    <td>
        <div align="center">
          <input name="txt_contact" type="text" onkeypress="return numbersonly(this, event);" size="30" maxlength="15"/>
        </div></td>
  </tr>
  
  
  
  
  <tr>
    <td colspan="2"><div align="right"></div>      <div align="center">
          <input type="submit" value="Register" name="submit" />
        </div></td>
    </tr>
</table>
</form>
</div>
</center>
<?php

if(isset($_POST['submit']))
{

$fname = $_POST['txt_fname'];
$lname = $_POST['txt_lname'];
$email = $_POST['txt_email'];
$contact = $_POST['txt_contact'];

include("dbconn.php");

$q = "insert into registration values('$fname','$lname','$email',$contact);";
$rs = mysql_query($q) or die("failed to execute the query");
echo'<script language="javascript">alert("You are registered");location="registration.html";</script>';
}

?>


        </div>
		  
      </div>
	  
    </div>
<!-- end div#content -->

<!--<div id="sidebar">
  
  ><?php include("right_column.php"); ?>
  
</div>-->
<!-- end div#sidebar -->
      
<!--<div style="clear: both; height: 1px"></div>
</div>
</div>-->

<!-- end div#page -->
  
<!--<div id="footer">
    
	><?php include("footer.php"); ?>
   
</div>

<!-- end div#footer -->

</div>

<!-- end div#wrapper -->

</body>
</html>
