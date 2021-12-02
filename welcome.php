<html>
    <head>
        <style>
            .check {
                width: 200px;
                height: 100px;
            }
            img {
                max-width: 900px;
                height: 450px;
                align-self: center;
            }
            body {
                align-self: center;
            }
            button {
                width: 150px;
                height: 50px;
            }
        </style>
    </head>
<center><body>
<center><h1>Quick Bank Data Entry Service</h1></center>
Welcome <?php echo $_GET["oName"]; ?>. Please start entry.<br> 
<br>
<br>
<div span="checks" name="checks">
    <img src="check1.png" id="check">
    <br>
    <label for="amount">Check Amount</label><br>
    <input type="text" name="amount" id="amount"><br><br>
    <button onclick="changeCheck()">Next Check</button>
</div>
</center>
<script>
    function changeCheck() {
        document.getElementById("check").src="check3.jpg";
        document.getElementById("amount").value="";
    }
</script>

</body>
</html> 