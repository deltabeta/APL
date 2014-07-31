<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

//Yii::app()->language='fr';

?>

<h1 class="title">The <?php echo CHtml::encode(Yii::app()->name); ?></h1>
 

<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
    <?php echo Yii::app()->session['type']; ?>
            <p> As a fast growing young economy Africa often is compared with emerging markets like Brazil, India and Turkey. There are many parallels but also many differences. What can make Africa a complicated case is the fact that Africa is not one country but 54. How are you going to build your brand in 54 countries? How to conduct your media strategy? How can you get in contact with over 10,000 African journalists in a highly fragmented media landscape?</p>
<div class="clear"></div>
<p>
Africa Business Communities has spent over three years getting connected with the African media. We have built relationships with thousands of African journalists resulting in the Africa Press List.</p>
<div class="clear"></div>
<p>
The Africa Press List is a powerful and highly effective PR tool being fully interactive. Our clients get direct access to this online tool that enables them to conduct tailor made press release campaigns.</p>
<div class="clear"></div>
<p>So you send your press releases to English speaking newspaper journalists in Abuja, Nigeria, reporting on politics. Or to all French speaking journalists in Cameroun working for television, reporting on fashion. Or to all Portuguese journalists worldwide, reporting on African business. Well, it is all up to you.</p>
<div class="clear"></div>
<p>We offer our clients both annual subscription to the Africa Press List and pay-as-you-go. Please feel free to contact us with your request.</p>
<hr>
<p>Stay up to date with our newest development and services.
<br />
You can also follow us on social media.<br /><br />
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/button-newslettersignup.jpg', ''); ?>
   </p> 
   </div>
    </div>
<div class="span-12" ><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/map2.jpg', ''); ?><br />

    <h3>A worldwide selection of journalists</h3>
    <p>Working for the most prominent media reporting on Africa</p>
<h3>4 Languages</h3>
<p>English, French, Portuguese and Arabic</p>
<h3>6 Media Types</h3>
<p>Television, Radio, Newspapers, Magazines, Internet and Blogs</p>
<h3>30 Fields of interest</h3>
<p>In 54 African countries</p>
<h3>Personal and direct contact with African journalists</h3>
    
</div>
</div>
