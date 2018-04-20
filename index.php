<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<h1>Find a Country</h1>

<h3>Find a country by name:</h3>

<form action="">
    Country name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Suggestions: <span id="txtHint"></span></p>

<script>
    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "gethint.php?q="+str, true);
        xhttp.send();
    }
</script>
</body>
</html>
