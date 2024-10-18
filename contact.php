<?php include("header.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coffee shop</title>
    <style>
#contact-details{
    height: 600px;
    width:1000px;
    background-color:pink;
    margin-left:auto;
    margin-right:auto;
}
.map{
    text-transform:uppercase;
    font-color:blue;
    text-decoration:underline;
}
.c h2{
    text-transform:uppercase;
    text-decoration:underline;
    font-size:23px;

}
.c p{
    color:purple;
    font-size:20px;
    text-transform:uppercase;
}
.c a{
    text-decoration:none;
    text-transform:none;
}
.l h2{
  font-size:20px;
  text-decoration:underline;
  text-transform:uppercase;
}
.l p{
    font-size:20px;
    color:purple;
}


        </style>
</head>
<body>
    <div id="contact-details">
        <div class="map">
            <h1>map</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15547.039387150286!2d80.21432932920744!3d13.05095264634521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267d5d769366b%3A0xbc64699fa440ab9c!2sCoffee%20Town%2C%20Kodambakkam!5e0!3m2!1sen!2sin!4v1708673354036!5m2!1sen!2sin" width="1000px" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="c">
            <h2>Contact details</h2>
            <p>contact:<a href="tel:1234567890">1234567890</a>
            </p>
            <p>email:<a href="mailto:abc@gmail.com">abc@gmail.com</a>
            </p>
        </div>
        <div class="l">
            <h2>Location</h2>
            <p>No:2,Gandhi nagar <br />main road chennai -6000042</p>
        </div>
    </div>
            </body>
            </html> 
<?php include("footer.html")      
?>  