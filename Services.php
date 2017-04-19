<?php
$title = "Services";
//head includes
ob_start();
?>

<style type="text/css">
    #servicesLink{
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
<h1>Services</h1>
<p>
    We currently offer the following services:
</p> 
<p>
    <b>30 Minute Swedish Massage: $35.00 </b>
    <br/>
    A 30 minute Swedish Massage can be either a full body massage 
    or a focused area massage, focusing on the back, arms, legs front and back, neck,
    shoulders, hands, feet, glutes or abdominal muscles. The focused area massage is designed to
    release tension in any part of the body that is irritated, 
    tense, tight, or is simply in need of special attention. 
</p>
<p>
    <b>60 Minute Swedish Massage:  $60.00</b>
    <br/>
    A 60 Minute Swedish Massage generally consists of 
    the face, neck, shoulders, arms, hands, legs front and back, glutes, back, feet, and 
    sometimes a scalp massage depending on preference. Abdominal muscles can be included per 
    request. 
</p>
<p>
    <b>90 Minute Swedish Massage: $90.00</b> 
    <br/>
    A 90 Minute Swedish Massage is an extended version of
    the 60 Minute Swedish Massage. The massage includes face, neck, shoulders, arms, hands, 
    legs front and back, glutes, back, feet, and a scalp massage depending on preference. 
    Abdominal Muscles can be included per request. With a 90 Minute Swedish Massage, the muscles
    endure and experience a longer time period allowing for a deep relaxation or deep therapeutic 
    relief massage. 
</p>
<p>
    <b>Special Attention Massage: $1 Per Minute of Massage.
        (Massages under 40 Minutes will be charged a service fee of $5.00, 
        unless more than one massage is being given to multiple people at one location) 
    </b>
    <br/>Special Attention Massage is helpful when you are pressed for time and only have 40-45 minutes 
    to spare instead of the full hour. With this massage, you can focus on one arm, 
    one leg, the back, the neck, the hands, the feet, the calves, the thighs, or the
    whole body. It is entirely up to you. 
</p>
<p style="margin-left:20px;">
    <b>*NOTE: </b>Due to the individuality of the individual's build, muscles, and therapy goals. 
    Special attention can be paid to any of the muscles listed above in order to provide a better 
    therapeutic massage experience as well as to provide release of tensed muscles needing more time. 
    Any part of any massage can be omitted per request. 
</p>
<p>
    <b>60 Minute Couples Teaching Massage: $70.00</b>
    <br />
    A 60 minute massage where the LMT teaches you and your significant other how to massage each other. 
    The massage therapist will show you the technique and how to apply it to your loved one; 
    and then the roles get switched and they learn to massage you. 
    Typically the arms, shoulders, and back are where most people have issues, but any adjustment can be made for this service. 
    If your hands, feet, and legs give you issues, the therapist can show you and your loved one how to work out the tensity. 
</p>
<p>
    <b>60 Minute Prenatal/Postpartum Massage: $63.00</b>
    <br/>
    An hour long prenatal massage is great for moms to be! It's an hour of relaxation, stretching, and pure bliss. 
    The client will lay on their side on the massage table and have multiple pillows for comfort.
     We also offer Postpartum massages for individuals that are still in recovery from having a baby! 
<p>
    <b>60 or 90 Minute Hot &/or Cold Stone Massage: $65.00 & $95.00</b>
    <br/>
    <b>Note: Hot stone available now. Cold stone coming soon.</b>
    <br/>

    A hot &/or cold stone massage can be performed in 60 minutes or 90 minutes. The heat from the stones
    are sedative and help to reduce stress. Hot stone massage can help chronic pain to lessen, reduces muscle stiffness,
     and the heat from the stones expand blood vessels increasing circulation! Its the gold standard of relaxation with these water heated stones!
    The cold stone massage constricts the blood vessels in the body to help alleviate pain and swelling 
    throughout the body. The cold stones are fantastic on trigger points without being invasive to the muscles. 
    The cold stones are also great for cooling off and can be just as relaxing as the hot stone massage! Cold stones are great for
    clients that prefer cold over heat. Both hot and cold stones promote healing in their own way!
</p>
 
<!--<?php include("partials/LocationCharge.php"); ?>-->

<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>