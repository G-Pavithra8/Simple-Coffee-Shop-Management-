<?php include("header.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <style>
#about{
    height:600px;
    width:1000px;
    margin-left:auto;
    margin-right:auto;
    background-image:url("img/c3.jpg");
    background-repeat:none;
    background-postion:relative;
}
h2{
    color:black;
    height:30px;
    width:100px;
    font-size:30px;
    float:left;
    text-align:center;
    text-transform:uppercase;
}
.obj1{
    float:left;
}
.obj2{
    float:right;
}
.obj3{
    float:left;
}
.obj4{
    float:right;
}
.write p{
    font-size:25px;
    color:white;
    text-align:bottom;
    font-style:italic;

}
</style>

</head>
<body>
<div id="about">
    <marquee behavior="center" direction="left">
        <h2>coffee world</h2>
    </marquee>
    <center>
    <div class="write">
        <p>coffee also has a deep cultural significance. In many countries, drinking coffee is an important social ritual, and it is often consumed in a specific setting, such as a coffee house or café. Additionally, coffee has been the subject of art, literature, and music.
    </p>

    </div>  
    <div class="obj1">
        <marquee direction="right">
        <img src="img/c1.jpg" height="200px" width="250px"/>
        </marquee>
    </div>
    <div class="obj2">
        <marquee direction="left">
        <img src="img/c2.jpg" height="200px" width="250px"/>
        </marquee>
    <div class="obj3">
        <marquee direction="down">
        <img src="img/c1.jpg" height="150px" width="200px"/>
        </marquee>
    </div>
    <div class="obj4">
        <marquee direction="up">
        <img src="img/c2.jpg" height="150px" width="200px"/>
        </marquee>
    </div>
</center>
</div>  
</body>
</html>
<?php include("footer.html")
?>