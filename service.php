<?php include("header.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Service</title>
    <style>
#service{
    background-color:purple;
    border-color:pink;
    margin-left:auto;
    margin-right:auto;
    height:800px;
    width:1000px;
}
.table{
    background-color:pink;
    font-size:50px;
    height:500px;
    width:1000px;
}
.table tr th{
    text-transform:uppercase;
    color:purple;
    text-align:center;
    font-size:50px;
}
.table tr td{
    font-style:italic;
     font-color:white;
    background-image:linear-gradient(purple,pink,white);
    position:relative;
    text-align:center;
    font-size:61px;

}
.img{
    height:300px;
    width:500px;
}
.img p{
    font-style:italic;
    text-transform:uppercase;
    font-size:50px;
    color:black;
    text-align:center;
    position:relative;
    left:450px;
    bottom:250px;
}
</style>
</head>
<body>
    <div id="service">
    <div class="img">
    <img src="img/c3.jpg" height="300px" width="400px">  
        <p>rise and grind it's coffee time</p>
    </div>
    <div class="table">
        <table border="1" >
        <tr>
            <th>items</th>
            <th>quantity</th>
            <th>discount</th>
            <th>price</th>
        </tr>
        <tr>
            <td>cold coffee</td>
            <td>1 cup</td>
            <td>2%</td>
            <td>200</td>
        </tr>
        <tr>
            <td>cappucinno</td>
            <td>1cup</td>
            <td>5%</td>
            <td>250</td>
        </tr>
        <tr>
            <td>Espresso</td>
            <td>1cup</td>
            <td>4%</td>
            <td>270</td>
        </tr>
        <tr>
            <td>Black eye</td>
            <td>1cup</td>
            <td>5%</td>
            <td>150</td>
        </tr>
        <tr>
            <td>Americano</td>
            <td>1cup</td>
            <td>2%</td>
            <td>250</td>
        </tr>
        <tr>
            <td>Latte</td>
            <td>1cup</td>
            <td>5%</td>
            <td>300</td>
        </tr>
</table>
</div>
</div> 
 
</body>
</html>
<?php include("footer.html")
?>