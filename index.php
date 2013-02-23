<?php include("head.php") ?>

<div class="hideable">

<h1>Overview</h1> 

<p>As you might guess, these are not the department&#39;s personal Russian emperors. Rather, a &quot;czar&quot; is a member of the department who is providing a service to the department as a volunteer.<br/>


<br/>There is no requirement that students act as czars, but the work that czars do helps the department run smoothly and everybody benefits in some way from the czar system, so you are urged to take on czarships occasionally to carry your share of the burden of department work.<br/>

<br/>If there is a czarship that you think should be created (particularly if you would be willing to take it on yourself at the beginning), contact the Czar Czar (currently Mark Reitblatt, <a href="mailto:reitblatt@cs.cornell.edu">reitblatt</a>) and let him know.</p><br/>

<h1>Current Czars</h1>
<br/>
<table class="schedule">
<tr>
   <td><b>Title</b></td>
   <td><b>Czars</b></td>
</tr>
<?php
    czar('Brown Bag', 'Hussam Abu-Libdeh', 'brown_bag.php');
    czar('Coke', 'Myle Ott', 'coke.php');
    czar('Colloquium', 'Guozhang Wang, Nan Rong, Brad Gulko, Chenhao Tan, Daniel Hauagge, Mark Reitblatt', 'colloquium.php');
    czar('Czar Czar', 'Mark Reitblatt', 'czar.php');
    czar('Desk', 'Amit Sharma', 'desk.php');
    czar('Espresso', 'Owen Arden, Daniel Hauagge, Sudip Roy', 'espresso.php');
    czar('Foosball', 'Hussam Abu-Libdeh', 'foosball.php');
    czar('GPSA Representative', 'Amit Sharma', 'rep.php');
    czar('Hockey', 'Alex Fix, Jeff Chadwick, Jean-Baptiste Jeannin', 'hockey.php');
    czar('Lounge', 'Deniz Altinbuken', 'lounge.php');
    czar('Mentoring', 'Brad Gulko', 'mentoring.php');
    czar('Milk', 'Hao Li, Colin Ponce, Yexiang Xue', 'milk.php');
    czar('Photo', 'Vasu Raman', 'photo.php');
    czar('Picnic', 'Jeff Chadwick', 'picnic.php');
    czar('Programming Contest', 'Daniel Fleischman', 'programming.php');
    czar('Quotes', 'Shrutarshi Basu, Aurosish Mishra', 'quotes.php');
    czar('Refrigerator', 'Tom Magrino', 'fridge.php');
    czar('Student Brown Bag', 'Mark Reitblatt', 'student_brown_bag.php');
    czar('Systems Lunch', 'Shrutarshi Basu', 'systems_lunch.php');
    czar('Talks Website', 'Gabriel Bender', 'talks.php');
    czar('TGIF', 'Alex Fix', 'tgif.php');
    czar('Visit Day', 'Tom Magrino, Rad Niazadeh, Brittany Nkounkou, Paul Upchurch, Scott Wehrwein', 'visit.php');
?>
</table>
<br/>
<h1>Open Czarships</h1>
<br/>
<table class="schedule">
<tr>
   <td><b>Title</b></td>
</tr>
<?php
    czar('Frisbee', '', 'frisbee.php');
    czar('Game Night', '', 'game_night.php');
?>
</table>
<br/>
<h1>Lapsed Czarships</h1>
<br/>
<table class="schedule">
<tr>
   <td><b>Title</b></td>
</tr>
<?php
    czar('Newspaper', '', 'newspaper.php');
    czar('Relocation Czar', '', '');
    czar('T-Shirt Czar', '', '');
    czar('Theater', '', 'theater.php');
    czar('Videotaping', '', 'video.php');
?>
</table>

</div>
<?php include("foot.php") ?>
