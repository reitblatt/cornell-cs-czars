<?php include("head.php") ?>

<div class="hideable">

<h1>Overview</h1> 

<p>As you might guess, these are not the department&#39;s personal Russian emperors. Rather, a &quot;czar&quot; is a member of the department who is providing a service to the department as a volunteer. 

<br><br>There is no requirement that students act as czars, but the work that czars do helps the department run smoothly and everybody benefits in some way from the czar system, so you are urged to take on czarships occasionally to carry your share of the burden of department work. 

<br><br>If there is a czarship that you think should be created (particularly if you would be willing to take it on yourself at the beginning), contact the Czar Czar (currently Mark Reitblatt, <a href="mailto:reitblatt@cs.cornell.edu">reitblatt</a>) and let him know.</p>

<h1>Current Czars</h1>
<br/>
<table class="schedule">
<tr>
   <td><b>Title</b></td>
   <td><b>Czars</b></td>
</tr>
<?php
    czar('Brown Bag', 'Hussam Abu-Libdeh', 'brown_bag.php');
    czar('Coke', 'Myle Ott, Ben Sowell', 'coke.php');
    czar('Colloquium', 'Guozhang Wang, Nan Rong, Brad Gulko, Chenhao Tan, Daniel Hauagge, Mark Reitblatt', 'colloquium.php');
    czar('Czar Czar', 'Mark Reitblatt', 'czar.php');
    czar('Desk', 'Amit Sharma', 'desk.php');
    czar('Espresso', 'Owen Arden, Daniel Hauagge, Sudip Roy', 'espresso.php');
    czar('Hockey', 'Alex Fix, Jeff Chadwick, Cristian Danescu-Niculescu-Mizil, Jean-Baptiste Jeannin', 'hockey.php');
    czar('Mentoring', 'Brad Gulko', 'mentoring.php');
    czar('Milk', 'Nan Rong, Colin Ponce', 'milk.php');
    czar('Photo', 'Vasu Raman', 'photo.php');
    czar('Picnic', 'Jeff Chadwick', 'picnic.php');
    czar('Refrigerator', 'Ainur Yessenalina', 'fridge.php');
    czar('Student Brown Bag', 'Mark Reitblatt', 'student_brown_bag.php');
    czar('Talks Website', 'Gabriel Bender, Dustin Tseng', 'talks.php');
    czar('Visit Day', 'Tim Langlois, Karn Seth, Stavros Nikolaou', 'visit.php');
    czar('TGIF', 'Alex Fix', 'tgif.php');
    czar('Lounge', 'Deniz Altinbucken', 'lounge.php');
    czar('Systems Lunch', 'Tuan Cao', 'systems_lunch.php');
?>
</table>
<br>
<h1>Open Czarships</h1>
<br/>
<table class="schedule">
<tr>
   <td><b>Title</b></td>
   <td><b>Czars</b></td>
</tr>
<?php
    czar('Frisbee', '', 'frisbee.php');
    czar('Programming Contest', '', 'programming.php');
    czar('Quotation', '', 'quotes.php');
    czar('Foosball', '', 'foosball.php');
?>
</table>
<br>
<h1>Lapsed Czarships</h1>
<br/>
<table class="schedule">
<tr>
   <td><b>Title</b></td>
   <td><b>Czars</b></td>
</tr>
<?php
    czar('Videotaping', '', 'video.php');
    czar('Relocation Czar', '', '');
    czar('T-Shirt Czar', '', '');
    czar('Newspaper', '', 'newspaper.php');
    czar('Theater', '', 'theater.php');
?>
</table>

</div>
<?php include("foot.php") ?>
