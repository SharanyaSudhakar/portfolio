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
<div class="container">
  <div class="menu" align="center"> <a href="../portfolio.php?menu=1" class="button">&#9679;&#9679;&#9679;Back</a><a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=1" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a>
	</div>
  <!-- end header--><div class="content"> 
<br>
<div class="rowv3">

<div class="columnv3 leftcolmn">
	
<h2>Honey Nector</h2>
<p>Honey dripping from<i> Honey Lights</i> petals.</p>
<h4>Requirements</h4>
<p>The honey has to drip and not flow. The honey should have viscosity. <br>The effect will be used couple of times per mocel and multiple times in game view so solution has to be optimized.</p>
<h4>Challenges</h4>
<p>Honey has to drip and have viscosity.<br>Particles effects cannot be effectively used because they cannot blend and merge.<br> Cannot be hand animated as randomeness is essential.<br>
</p>
</div>

<div class="columnv3 rightcolum"><img src="../images/honeylight-concept.jpg" width="300px"/></div></div>

<h4>Solution Trials</h4>
<p><b>Particles:</b> The particle effect soltuion was not effective at all. It couldnt blend and merge or simulate a flowing honey.<br>
<b>Deform Shader:</b> This shader was closer to flowing liquid but looked more like lava than honey.<br>
<b>Noise Shader:</b> This shader was an even closer solution and needed to be iterated on.</p>
<br><br>

<div class="rowv3">
<div class="columnv3 leftcolmn"><iframe width="560" height="315" src="https://www.youtube.com/embed/gmKfufQyxPE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h6><i>1. Particles  &nbsp;2. Deform Shader &nbsp;3. Noise Shader</i></h6></div>
</div>

<h4>Hickups!</h4>
<p>During more research I came upon a shader for fire on YouTube. This inspired me to try the noise shader for the honey too. I inverted the <i>voronoi noise</i> function in the reverse direction to achieve the viscos look and feel for the honey.</p>
<br>

<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/E8ZWoEcNJxQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
