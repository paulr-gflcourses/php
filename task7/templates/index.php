<html>
<head>
    <title>%TITLE%</title>
    <style type="text/css" media="all">
        .errors{
            color: #FF0000; 
            font-size: 15px;
        }
    </style>
</head>
<body>
<div><h2>Contact Form</h2></div>

<form method="POST" onsubmit="saveUserTime()">
<div class="errors"><strong>%ERR_NAME%</strong></div>
<p><label for=name>Name:</label>
<input type=text id=name name=name value="%NAME%"></p>

<div class="errors"><strong>%ERR_EMAIL%</strong></div>
<p><label for=email>E-mail:</label>
<input type=email id=email name=email value="%EMAIL%"></p>

<div class="errors"><strong>%ERR_SUBJECT%</strong></div>
<p><label for=subject>Subject:</label>
<select name='subject' id='subject'>
<option value="">Please, select</option>
<option>Subject1</option>
<option>Subject2</option>
<option>Subject3</option>
</select></p>

<div class="errors"><strong>%ERR_MESSAGE%</strong></div>
<p><label for=message>Message:</label>
<textarea rows="10" cols="45" name="message">%MESSAGE%</textarea></p>

<input type="hidden" name="time" id="time"/>

<div class="errors"><strong>%ERR_SENDING%</strong></div>
<input type="submit" value="Submit">
</form>


<script charset="utf-8">

function setSelectedOption(){
    let selectSubject=document.getElementById("subject");
    selectSubject.value= "%SUBJECT%" ;
}
window.onload = setSelectedOption
    function saveUserTime(){
        document.getElementById("time").value = new Date();
    }
</script>
</body>
</html>
