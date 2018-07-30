<html>
<head>
	<title>%TITLE%</title>
</head>
<body>
<div><h2>Contact Form</h2></div>
<!--div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div-->

<form method="POST">
<div style="color: #FF0000; font-size: 15px;"><strong>%ERR_NAME%</strong></div>
<p><label for=name>Name:</label>
<input type=text id=name name=name value="%NAME%"></p>

<div style="color: #FF0000; font-size: 15px;"><strong>%ERR_EMAIL%</strong></div>
<p><label for=email>E-mail:</label>
<input type=email id=email name=email value="%EMAIL%"></p>

<div style="color: #FF0000; font-size: 15px;"><strong>%ERR_SUBJECT%</strong></div>
<p><label for=subject>Subject:</label>
<select name=subject>
<option value="">Please, select</option>
<option>Subject1</option>
<option>Subject2</option>
<option>Subject3</option>
</select></p>

<div style="color: #FF0000; font-size: 15px;"><strong>%ERR_MESSAGE%</strong></div>
<p><label for=message>Message:</label>
<textarea rows="10" cols="45" name="message">%MESSAGE%</textarea></p>

<input type="submit" value="Submit">
</form>
</body>
</html>
