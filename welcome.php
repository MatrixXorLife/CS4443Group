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
                background-color: #D3D3D3;
            }
            button {
                width: 150px;
                height: 50px;
            }
            .iform {
                background-color: white;
                width:500px;
            }
            div {
                background-color: blue;
                width: 900px;
            }
            .titlediv {
                background-color:#4169E1;
                width:100%;
            }
            input {
                background-color: #00FF7F;
            }
            .dbsubmit {
                height: 50px;
                width: 300px;

            }
        </style>
    </head>
<center><body>
    <div class="titlediv">
<center><h1>Quick Bank Data Entry Service</h1></center>
Welcome. Please start entry.
        </div><br> 
<br>
<form action="operation.php">
    <input type="submit" value="Entry History - Database" class="dbsubmit">
        </form>
<br>
<div span="checks" name="checks">
    <img src="check1.png" id="check">
    <br><br>
    <button onclick="changeCheck('check')">Next Check</button>
    <br>
    
    
<form method="post" action="insert.php" class="iform">
<br>

<label style="color:blue; font-size: 20px; font-weight: bold;">Reciever</label><br>

<input type="text" name="reciever" size="40"/><br>

<label style="color:blue; font-size: 20px; font-weight: bold;">Check Amount</label><br>

<input type="text" name="checkAmount" size="40"/>
<br>
<br>

<input onclick="changeCheck('check')" type="submit" value="Submit to Database" id="subLogin" />

</form>
</div>
</center>
<script>
    var imgArray = new Array();
    imgArray[0] = new Image();
    imgArray[0].src = 'check1.png';
    imgArray[1] = new Image();
    imgArray[1].src = 'check2.jpg';
    imgArray[2] = new Image();
    imgArray[2].src = 'check3.jpg';

    function changeCheck(element) {
        var img = document.getElementById(element);

    for(var i = 0; i < imgArray.length;i++)
    {
        if(imgArray[i].src == img.src) // << check this
        {
            if(i === imgArray.length){
                document.getElementById(element).src = imgArray[0].src;
                break;
            }
            document.getElementById(element).src = imgArray[i+1].src;
            break;
        }
    }
        
    }
</script>

</body>
</html> 
