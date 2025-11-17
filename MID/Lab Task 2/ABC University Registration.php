<!DOCTYPE html>
<html>
<head>
<title>ABC University Registration</title>
</head>

<body>
<center><h1 style="color:blue;border-bottom: 3px solid blue; width: 33%;">Student Registration</h1></center>

<form id="Registration Form">
Full name:<br>
<input type="text"><br><br>
<body>
Email:<br>
<input type="text"><br><br>
Password:<br>
<input type="text"><br><br>
Confirm Password:<br>
<input type="text"><br><br>
<input type="Submit"><Register><br>
</form>

<script>
    function handleSubmit() {
      var FullName = document.getElementById("FullName").value.trim();
      var Email = document.getElementById("Email").value.trim();
      var Password = document.getElementById("Password").value;
      var ConfirmPassword = document.getElementById("ConfirmPassword").value;
      
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";

</body>
</html>




