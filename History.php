<?php
$title = "History";
//head includes
ob_start();
?>
<style type="text/css">
    #historyLink{
        color:grey !important;
        text-decoration: underline !important;
        border-bottom:1px solid grey;
    }
</style>

<?php
$headContents = ob_get_contents();
ob_end_clean();
//body 
ob_start();
?>

<div id="bio" >
    <img src="images/madison.jpg" style="float:left;margin-right:20px;"/>
    <h1>History</h1>
    <p>Madison Plumb, LMT</p>
    <p>
        I graduated high school a semester early and quickly enrolled in massage school. 
        I completed the massage program in a little under 8 months, acquiring 750 hours of book experience 
        and hands-on training. I graduated with a 3.9 GPA. 
        After spending several months preparing, I scheduled my licensing exam and passed, becoming a licensed massage therapist.
    </p>
    <p>
        I started my career working locally with some surrounding spas and resorts within Pike and Wayne counties in Pennsylvania in 2012. 
        I have now relocated and am serving the Lehigh Valley to include Lehigh, Northampton, Monroe, parts of Berks and Bucks Counties.
        I did spend a short time working as an intern with a local chiropractor, but I have more of a desire to focus on personal clients 
        and being able to do my own scheduling, different types of therapies, and be able to coordinate with my clients' personal lives on a
        day to day basis.
      </p>
    <p>
        I am very passionate about massage and differing types of therapy. I love using Lotions, creams and gels from Natural Formulations Company, 
        which contain all natural ingredients and some certified organic products. I strive to make massage as therapeutic as possible and I'm not 
        driven by making money but by helping people have a better quality of life.
    </p>
</div>

<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>