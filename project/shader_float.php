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
<div class="container"><div class="menu" align="center"><a href="../portfolio.php?menu=1" class="button">&#9679;&#9679;&#9679;Back</a> <a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=1" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a></div>
  <!-- end header--><div class="content"> 
<br>
<h2>Floating Globules</h2>
<div class="rowv3">

<div class="columnv3 leftcolmn">
<p>Create floating spheres that emit from the center of <i>Stumpy Well</i> that will float up and disappear.</p>
<h4>Requirements</h4>
<p>The globes have to float up in a random fashion. They should glow and wither away or disintegrate when they disappear.</p>
<h4>Challenges</h4>
<p>The withering effect cannot be animated for an optimized rendering time so find a shader solution.<br>
If the spheres are made to rise up in the straight line that dont appear to be floating.<br>
The entire solution should appear random</p>
</div>

<div class="columnv3 rightcolum"><img src="../images/stympy-concept.jpg" /></div></div>

<h4>Solution</h4>
<p><b>Float:</b> The spheres are squished and squashed using a <i>sine wave</i> and floated up with a <i>Helix</i> equation where the <i>x</i> and <i>z</i> radius can be scripted for random generation.<br>
<b>Disintegrate effect:</b> This is achieved via a noise function and the alpha clip threshold value. As the sphere disintegrates a <i>Fresnel Effect</i> has also been added.<br> The sphere is made to glow via a simple emission.</p>

<br><br>

<div class="rowv3">
<div class="columnv3 halfcolumn"><iframe src="https://www.youtube.com/embed/3Qr_8T4_eZ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h6><i>Sine wave and Helix </i></h6></div>
<div class="columnv3 halfcolumn"><iframe src="https://www.youtube.com/embed/KjU6H7zorn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>Disintegrate effect with Fresnel</i></h6></div>
</div>

<h4>Hickups!</h4>
<p>This was a very straight forward execution. I broke the problem in parts and solved it in sections and then combined them. Shader grpahing the Helix function was tedious, but scripting it on the other hand was a cinch.</p>
<br>

<h4>Final Solution</h4>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Vh_ER7eqG6A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
