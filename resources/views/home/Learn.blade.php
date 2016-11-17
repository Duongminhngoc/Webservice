<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script src="assets/js/jquery-2.1.1.min.js"></script>       
<script src="assets/js/bootstrap.js"></script>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/common.css" rel="stylesheet" type="text/css" media="all">

<body>
<div class="container">
    <div class="frame-image">
    	<!--<img class="text-image" src="Image_Learn/text2.png" />-->
        
     	<img class="mySlides" src="Image_Learn/h1.png" />
     	<img class="mySlides" src="Image_Learn/h2.png" />
    	<img class="mySlides" src="Image_Learn/h3.png" />
     	<img class="mySlides" src="Image_Learn/h4.png" />
     	<img class="mySlides" src="Image_Learn/h5.png" />
    	
      <a class="w3-btn-floating " id="icon-left"  onclick="plusDivs(-1)">&lt;</a>
      <a class="w3-btn-floating " id="icon-right" onclick="plusDivs(1)">&gt;</a>
    </div>
    
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
