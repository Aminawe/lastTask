<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Last Fuckin Task For Training</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
$('#showValues').hide();
$('#button').click(function()
{
var name = $('#name').val();
var mobileNumber = $('#mobileNumber').val();
var email = $('#email').val();
$('#sname').text(name);
$('#smobilenumber').text(mobileNumber);
$('#semail').text(email); 
$('#showValues').slideDown();
});
});
</script>
</head>
<body>
<table>
<tr>
<td>Name</td>
<td>
<input type="text" id="name" name="name" required=""></td>
</tr>
<tr>
<td>Mobile Number</td>
<td>
<input type="Number" id="mobileNumber" name="mobileNumber" required="">
</td>
</tr>
<tr>
<td>Email</td>
<td>
<input type="email" id="email" name="email" required=""></td>
</tr>
</table>
<button id='button'>Submit</button>
<div id='showValues'>
<table cellpadding="5" border='1'>
<tr>
<td>Name:</td>
<td id='sname'></td>
</tr>
<tr>
<td>Mobile Number:</td>
<td id='smobilenumber'></td>
</tr>
<tr>
<td>Email:</td>
<td id='semail'></td>
</tr>
</table>
</div>
</body>
</html>