<?php
session_start();
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <script src="jquery/jquery-3.1.1.min.js"></script>
  <title>Jo ik ben anton en ik ben een event manager en ik vind jullie gay.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div id="container">

    <nav>
      <li><a href="#" class="active"><i class="agenda"></i>Agenda</a></li>
      <li><a href="#"><i class="info"></i>Info</a></li>
      <li><a href="#"><i class="nieuws"></i>Nieuws</a></li>
      <li><a href="#"><i class="contact"></i>Contact</a></li>
    </nav>
      <main>
  <section>


<?php
$kip = "SELECT * FROM card_summary";
$result = $conn->query($kip);
if ($result->num_rows > 0) {
  // Er zijn producten
  while($row = $result->fetch_assoc()){
?>
<div class="summary">
<div class="summary-unit">
<img src="<?php echo $row['image_url'];?>"></div>
<h3><?php echo $row['locatie']; ?></h3>
 <p><?xml version="1.0" encoding="iso-8859-1"?>
 <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
 <g>
 	<g>
 		<path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035
 			c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719
 			c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"/>
 	</g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 <g>
 </g>
 </svg>
   <?php echo $row['locatie']; ?></p>
<?php

?>
  <p><?xml version="1.0" encoding="iso-8859-1"?>
  <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 41.301 41.301" style="enable-background:new 0 0 41.301 41.301;" xml:space="preserve">
  <path style="fill:#1E201D;" d="M20.642,0c5.698,0,10.857,2.317,14.602,6.047c3.73,3.746,6.047,8.905,6.047,14.603
  	c0,5.698-2.317,10.857-6.047,14.603c-3.746,3.73-8.904,6.047-14.602,6.047S9.786,38.983,6.056,35.253
  	C2.31,31.507,0.008,26.349,0.008,20.65c0-5.698,2.301-10.857,6.047-14.603C9.786,2.317,14.944,0,20.642,0L20.642,0z M31.166,19.523
  	c0.619,0,1.111,0.508,1.111,1.127c0,0.619-0.492,1.127-1.111,1.127H20.674h-0.032c-0.413,0-0.778-0.238-0.968-0.571l-0.016-0.016
  	l0,0l-0.016-0.032l0,0v-0.016l0,0l-0.016-0.032l0,0l-0.016-0.032l0,0v-0.016l0,0l-0.016-0.032l0,0l-0.016-0.016l0,0v-0.032l0,0
  	l-0.016-0.032l0,0v-0.016l0,0l-0.016-0.032l0,0v-0.032l0,0v-0.016v-0.016l-0.016-0.016l0,0v-0.032l0,0v-0.032l0,0V20.73l0,0v-0.016
  	l0,0v-0.032l0,0V20.65l0,0V7.206c0-0.619,0.492-1.111,1.111-1.111c0.619,0,1.127,0.492,1.127,1.111v12.317H31.166z M33.657,7.635
  	c-3.333-3.333-7.936-5.381-13.015-5.381S10.96,4.301,7.627,7.635C4.31,10.968,2.246,15.571,2.246,20.65
  	c0,5.079,2.063,9.682,5.381,13.016c3.333,3.333,7.936,5.381,13.015,5.381s9.682-2.048,13.015-5.381
  	c3.333-3.333,5.397-7.936,5.397-13.016C39.054,15.571,36.991,10.968,33.657,7.635L33.657,7.635z"/>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  </svg>
<?php echo $row['datum']; ?></p>

  <p><?xml version="1.0" encoding="iso-8859-1"?>
  <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
  <g>
  	<path d="M42.5,22h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,22,42.5,22z"/>
  	<path d="M17.5,16h10c0.552,0,1-0.447,1-1s-0.448-1-1-1h-10c-0.552,0-1,0.447-1,1S16.948,16,17.5,16z"/>
  	<path d="M42.5,30h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,30,42.5,30z"/>
  	<path d="M42.5,38h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,38,42.5,38z"/>
  	<path d="M42.5,46h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,46,42.5,46z"/>
  	<path d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z"/>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  <g>
  </g>
  </svg>
<?php echo $row['locatie']; ?></p>
  <span><?php echo $row['datum']; ?></span>


  <?php

    }
  }

   ?>

  </section>
</main>
</body>
<!-- summary -->



<!--  <button type="button" name="button">JOIN</button> -->
</div>
</div>
<footer></footer>

</html>
