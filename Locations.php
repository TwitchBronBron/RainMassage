<?php
$title = "Locations";
//head includes
ob_start();
?>

<style type="text/css">
    #locationsLink{
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
<h1>Locations</h1>
<p>
    RAIN Massage currently provides services to:</p>
<ul>
    <li>Pike county</li>
    <li>Wayne county</li>
    <li>Counties surrounding Pike county</li>
</ul>
<p>
    For locations more than 25 Miles away from <a href="https://www.google.com/maps/preview?authuser=0#!q=hawley%2C+pa&data=!4m15!2m14!1m13!1s0x89c4b1b4b1fa3c51%3A0x6f0fe9702451cdc!3m8!1m3!1d26319325!2d-95.677068!3d37.0625!3m2!1i1600!2i775!4f13.1!4m2!3d41.4759224!4d-75.1821189">Hawley, PA</a>, there will be a $0.30 charge per mile OVER the 25 mile limit. 
    If you are not sure if RAIN would travel to your area, please do not hesitate to <a href="ContactUs.php">contact us</a>. 
    Arrangements can sometimes be made for farther location requests. 

</p>
<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>