<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <meta charset="utf-8"/>
</head>
<body>

<div class="container-fluid">
    <header>
        <h1>Расчет цены исходя из масы</h1>
    </header>

    <label>Цена за килограм</label>
    <input type="text" name="number1" id="number1" placeholder="руб\кг"> <br>
    <br>
    <label>Я беру (масса гр.) в любом магазине есть весы</label>
    <input type="text" name="number2" id="number2" placeholder="гр. на весах"><br>
    <button type="button" class="btn btn-info" onclick="submit1()">submit</button><br><br>
    <div class="screen" id="screen1"> </div>


</div>
<script>

    function submit1(){
        var a =  document.getElementById("number1").value;
        var b =  document.getElementById("number2").value;
        var c = a * b/1000;
        document.getElementById("screen1").innerHTML=c;
    }
</script>

</body>
</html>