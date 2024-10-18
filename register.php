<?php include("header.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeration</title>
    <style>
#register{
    height:300px;
    width:1000px;
    margin-left:auto;
    margin-right:auto;
    background-image:url("img/c2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
.fill{
    font-size:28px;
    color: rgb(27, 2, 18);
    position:relative;
    left:300px;
}
</style>
</head>
<body>
    <div id="register">
    <div class="fill">
    <form action="connect.php" method="post">
<label for="name">NAME:</label>
<input type="text" size="40" placeholder="enter name" name="n"/><br /><br />
<label for="items">ITEMS:</label>
<input type="text" size="40" placeholder="enter here" name="i"/><br /><br />
<label for="quantity">QUANTITY:</label>
<input type="number" size="40" placeholder="enter quantity" name="q"/><br /><br />
<label for="cash mode">BILL:</label>
<input type="radio" size="40" value="cash"  name="r"/> Cash
<input type="radio" size="40" value="card"  name="r" /> Card 
<input type="radio" size="40" value="card" /> Gpay<br/> <br/>
<input type="submit" value="SUBMIT" />
<button>BACK </button>
</form>
</div>
</div>
</body>
</html>
<?php include("footer.html")
?>