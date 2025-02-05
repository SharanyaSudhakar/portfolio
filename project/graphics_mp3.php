<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio Page- Sharanya Sudhakar</title>
<link href="../css/homepage.css" rel="stylesheet" type="text/css">
<link href="../css/portfolioHome.css" rel="stylesheet" type="text/css">
<link href="../css/project.css" rel="stylesheet" type="text/css">
<script src = "../js/menuanime.js?6"></script> 
<script src="../js/slideshow.js"></script> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 

<!-- Custom fonts from Adobe Fonts-->
<link rel="stylesheet" href="https://use.typekit.net/yvg7yal.css">
<link href="../css/imagelightbox.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include '../php/mainheader.php';?>
<!-- main container-->
<div class="container"><div class="menu" align="center"><a href="../portfolio.php?menu=2" class="button">&#9679;&#9679;&#9679;Back</a> <a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=2" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a></div>
  <!-- end header--><div class="content"> 
<h2>Vectors and Normals with Shadow Projection</h2>

<h4>Project Specifications</h4>
	<p>Projects Shoot out of one wall onto the opp. wall, these projects travel along a vector whose postions can be modified at run time using the wall paddles. The current balls direction doesn't change, but the newly created balls change directions immediately.<br>
	The balls bounce off the <i>Bulls Eye</i> if it hits the center circle and not the outer balck square or in the back.<br> As the balls travel, theire projects onto the cylinder's surface and the Bulls Eye is calculated on the fly using Vector Math.</p><br><br>
<h4>Hip Hip Hooray- It Worked!</h4>
<p>This was a bloody brutal project. Because of the number of elements and the do and don't. The math itself was a simple one line code additon. This is a facinating fact though, complex math solutions become one line code changers. The projects on the cyclinder were harder to implement as mine kept sinking into the cylinder. To fix this, the projection h distance has to be continually calculated to the center of the cylindrical line and its radius be subtracted.</p>
<br>
<br>
<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/_RNAurpFt9M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
