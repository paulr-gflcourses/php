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
<div><h2>%TITLE%</h2></div>

<form method="POST">
    <label for="search">Enter the search query:</label>
    <input type="text" name="search" id="search" />
    <input type="submit" value="Search">
</form>

<div class="errors" id="errors">
    %ERRORS%
</div>

<div class="searchResult" id="searchResult">
   %SEARCH_RESULT% 
</div>

</body>
</html>
