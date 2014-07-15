<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<script>
    $('.collapse').collapse()
</script>

<br />



<h1 class="title">Tips to write a press-release</h1>

<div class="row">
<div class="span-16" >   
       

            <div class="panel-group" id="accordion">

                                    <?php


$this->widget('zii.widgets.jui.CJuiAccordion', array(
    'panels'=>array(



        'Write the headline'=>'   <div class="panel-body">
                            It should be brief, clear and to the point: an ultra-compact version of the press releases key point.<br>
                            <br>
                            <ul>
                                <li>
                                    News release headlines should have a "grabber" to attract readers, i.e., journalists, just as a newspaper headline is meant to grab readers. It may describe the latest achievement of an organization, a recent newsworthy event, a new product or service. For example, "XYZ Co. enters strategic partnership with ABC Co. in India &amp; United States."<br>
                                    &nbsp;</li>
                                <li>
                                    Headlines are written in bold and are typically larger than the press release text. Conventional press release headlines are present-tense and exclude "a" and "the" as well as forms of the verb "to be" in certain contexts.<br>
                                    &nbsp;</li>
                                <li>
                                    The first word in the press release headline should be capitalized, as should all proper nouns. Most headline words appear in lower-case letters, although adding a stylized "small caps" style can create a more graphically news-attractive look and feel. Do not capitalize every word.<br>
                                    &nbsp;</li>
                                <li>
                                    The simplest method to arrive at the press release headline is to extract the most important keywords from your press release. Now from these keywords, try to frame a logical and attention-getting statement. Using keywords will give you better visibility in search engines, and it will be simpler for journalists and readers to get the idea of the press release content.<br>
                                    &nbsp;</li>
                            </ul>
                        </div>',



        'Write the press release body copy'=>'<div class="panel-body">
                            The press release should be written as you want it to appear in a news story.<br>
                            <ul>
                                <li>
                                    Start with the date and city in which the press release is originated. The city may be omitted if it will be confusing, for example if the release is written in New York about events in the company\'s Chicago division.</li>
                                <li>
                                    The lead, or first sentence, should grab the reader and say concisely what is happening. The next 1-2 sentences then expand upon the lead.</li>
                                <li>
                                    The press release <b>body copy</b> should be compact. Avoid using very long sentences and paragraphs. Avoid repetition and over use of fancy language and jargon.</li>
                                <li>
                                    A first paragraph (two to three sentences) must actually sum up the press release and the further content must elaborate it. In a fast-paced world, neither journalists nor other readers would read the entire press release if the start of the article didn\'t generate interest.</li>
                                <li>
                                    Deal with actual facts - events, products, services, people, targets, goals, plans, projects. Try to provide maximum use of concrete facts. A simple method for writing an effective press release is to make a list of following things:<br>
                                    &nbsp;</li>
                            </ul>
                        </div>',





         
        '  Communicate the 5 Ws and the H   '=>' <div class="panel-body">
                            Who, what, when, where, why, and how. Then consider the points below if pertinent.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <em>What is the actual news?<br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Why this is news.<br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; The people, products, items, dates and other things related with the news.<br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; The purpose behind the news.<br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Your company - the source of this news.</em><br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br>
                            Now from the points gathered, try to construct paragraphs and assemble them sequentially: The headline &gt; the summary or introduction of the news &gt; event or achievements &gt; product &gt; people &gt; again the concluding summary &gt; the company.<br>
                            <br>
                            The length of a press release should be no more than three pages. If you are sending a hard copy, text should be double-spaced.<br>
                            &nbsp;<br>
                            The more newsworthy you make the press release copy, the better the chances of it being selected by a journalist for reporting. Find out what "newsworthy" means to a given market and use it to hook the editor or reporter.<br>
                            &nbsp;
                        </div>',



        'Include information about the company '=>' <div class="panel-body">
                            When a journalist picks up your press release for a story, he/she would logically have to mention the company in the news article. Journalists can then get the company information from this section.?<br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br>
                            <ul>
                                <li>
                                    The title for this section should be - About XYZ_COMPANY</li>
                                <li>
                                    After the title, use a paragraph or two to describe your company with 5/6 lines each. The text must describe your company, its core business and the business policy. Many businesses already have professionally written brochures, presentations, business plans, etc. - that introductory text can be put here.</li>
                                <li>
                                    At the end of this section, point to your website. The link should be the exact and complete URL without any embedding so that, even if this page is printed, the link will be printed as it is. For example: <a title="http://www.your_company_website.com" rel="nofollow" href="http://www.your_company_website.com/" class="external free">http://www.your_company_website.com</a>. Companies which maintain a separate media page on their websites must point to that URL here. A media page typically has contact information and press kits.<br>
                                    &nbsp;</li>
                            </ul>
                        </div>',



        'Tie it together '=>' <div class="panel-body">
                            Provide some extra information links that support your press release.
                        </div>',



        'Add contact information'=>' <div class="panel-body">
                            If your press release is really newsworthy, journalists would surely like more information or would like to interview key people associated with it.?<br>
                            <br>
                            If you are comfortable with the idea of letting your key people be contacted directly by media, you can provide their contact details on the press release page itself. For example, in case of some innovation, you can provide the contact information of your engineering or research team for the media.<br>
                            Otherwise, you must provide the details of your media/PR department in the "Contact" section. If you do not have dedicated team for this function, you must appoint somebody who will act as a link between the media and your people.<br>
                            <br>
                            The contact details must be limited and specific only to the current press release. The contact details must include:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <em>The Company\'s Official Name<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Media Department\'s official Name and Contact Person<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Office Address<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Telephone and fax Numbers with proper country/city codes and extension numbers<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Mobile Phone Number (optional)<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Timings of availability<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; E-mail Addresses<br>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Web site Address</em><br>
                            &nbsp;</div>
                    ',
        
        
    ),
    'options'=>array(
        'autoHeight'=>false,
          'active'=>false,
       // 'autowidth'=>true,
            'active' => false,
        // 'animated'=>'bounceslide',     
         'collapsible'=>true,
         'actwive'=>FALSE,
             'icons'=>array(

             "header"=>"ui-icon-plus",//ui-icon-circle-arrow-e

             "headerSelected"=>"ui-icon-circle-arrow-s",//ui-icon-circle-arrow-s, ui-icon-minus

            ),
     ),
    'htmlOptions'=>array(
        'style'=>'width:600px   ;',
      

    ),

));

?>



    </div> 



</div>

<div class="span-10" >   

    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/country-picture(1).jpg', ''); ?>
</div>

    


</div>
