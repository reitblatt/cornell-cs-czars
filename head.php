<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Computer Science Czars</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link type="text/css" rel="stylesheet" href="style.css" />
<link rel="shortcut icon" href="http://www.cornell.edu/favicon.ico" />
</head>
<body>
<div id="canvas">
<div id="info">
<h1><a href="index.php">Computer Science Dept. Czars</a></h1>
  <br/><br/>
<!-- <p style="margin-top:10px;"> -->
<!-- Friday, May 18th, 2012</br> -->
<!-- <a class="presenter" href="http://www.birds.cornell.edu">Laboratory of Ornithology</a></br>159 Sapsucker Woods Rd, Ithaca, NY 14850 (<a class="presenter" href="http://www.birds.cornell.edu/Page.aspx?pid=1573">Directions</a>)<br/> -->
<!-- </p> -->
</div>
<div id="logo"> 
<img src="images/cslogo.png" alt="Cornell Computer Science" />
</div>
<div style="clear:both;"></div>
<div id="menu"> 
<ul><li>&nbsp;</li></ul>
</div>

<?php
  function czar($title, $czars, $link) {
    echo '<tr>';
    if ($link == '') {
        echo '<td class="topic">' . $title . '';
    } else {
        echo '<td class="topic"><a href=' . "$link" . '>' . $title . '</a>';
    }
    echo '</td>';
    if ($czars == '') {
    } else {
    echo '<td class="event">' . $czars . '</td>';}
    echo '</tr>';
  }
?>
