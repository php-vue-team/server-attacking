
<h1 style = "text-align:center"> XSS attack 1 </h1>

<?php 
    setcookie("username", "soe", time()+3600);
    setcookie("password", "123", time()+3600);
?>

<div style="margin-left: 30%; margin-top: 40px;">
    <p>Input</p>
    <textarea id="text1" rows="10" cols="90"></textarea>
</div>

<div style="margin-left: 30%; margin-top: 40px;">
    <input type="button" value="Update" onclick="update()" style="background-color:rgb(53, 240, 53); font-size: 16px; margin: 4px 2px;">
</div>

<div style="margin-left: 20%; margin-top: 40px;">
    <label>_____________________________________________________________________________________________________________________________</label>
</div>

<div style="margin-left: 30%; margin-top: 40px;">
    <label id="result">Result :</label>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    function update() {
        var value = $("#text1").val();
        console.log(value)
        var result=$("<label>" + value + "</label>");
        $('#result').append(result);
    }
</script>

<script>

    var theCookies = document.cookie.split(';');
    var aString = '';
    for (var i = 1 ; i <= theCookies.length; i++) {
        aString += i + ' ' + theCookies[i-1] + "\n";
    }
console.log(aString)
</script>