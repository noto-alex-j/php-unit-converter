<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src= "global.js"></script>
  <?php include "converter_classes.php"; ?>
  <title>CONVERSIONTRON</title>
</head>

<body class= "body">

    <h1 class= "title">CONVERSIONTRON</h1>
    
    <div class= "converter">
        <form class= "form" action="index.php" method="post">
            <input type="text" name="input" class= "input">
            <select name= "conversion" class= "select" id= "conversion">
                <option value= ""></option>
                <option value= "ftoc">Farenheit to Celsius</option>
                <option value= "ctof">Celsius to Farenheit</option>
                <option value= "mtok">Miles to Kilometers</option>
                <option value= "ktom">Kilometers to Miles</option>
                <option value= "pounds">Pounds</option>
                <option value= "kilos">Kilograms</option>
                <option value= "stone">Stone</option>
            </select>
            <select name= "ks" class= "select" id= "toUnitsks">
                <option value= ""></option>
                <option value= "kilos">to Kilograms</option>
                <option value= "stone">to Stone</option>
            </select>
            <select name= "pk" class= "select" id= "toUnitspk">
                <option value= ""></option>
                <option value= "pounds">to Pounds</option>
                <option value= "kilos">to Kilograms</option>
            </select>
            <select name= "ps" class= "select" id= "toUnitsps">
                <option value= ""></option>
                <option value= "pounds">to Pounds</option>
                <option value= "stone">to Stone</option>
            </select>
            <input type="submit" name="submit" class= "submit" value="CONVERTILIZE!">
        </form>
        <div class= "output"><?php $output ?></div>
    </div>

</body>

</html>