
<h1>Account Overview</h1>
<div class="row">
 
    
    
    <div class="span-9">
        <div class="udetail-box">
            <h3 class="udash-header">Personal Information</h3>
            <img width="92" height="83" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dash-info.png">
            <table cellspacing="0" cellpadding="2" style="margin-top: 15px;">
                <tbody><tr><td>Full name:</td>
                        <td><?php echo $model->porfile_name_first.' '.$model->porfile_name_last; ?></td></tr><tr>
                    </tr><tr><td>Email:</td>
                        <td><a href="mailto:<?php echo $model->user_email; ?>"><?php echo $model->user_email; ?></a></td></tr><tr>
                    </tr><tr><td>Phone:</td>

                        <td><?php echo $model->porfile_phone; ?></td></tr><tr>
                    </tr><tr><td>Address:</td>
                        <td><?php echo $model->porfile_address; ?></td></tr><tr>

                        <td><?php echo $model->porfile_phone; ?></td></tr><tr>
                    </tr><tr><td>Address:</td>
                        <td><?php echo $model->porfile_address ; ?></td></tr><tr>

                    </tr><tr><td style="color:red;" colspan="2"></td></tr>
                </tbody></table>

            <a title="Modify your account details" href="">
                <div style="margin-top: 45px;" class="us-button-edit-porfile"></div>
            </a>

        </div>
       </div>
<div class="span-9">
        <div class="udetail-box">
            <h3 class="udash-header">Company</h3>
            <img width="92" height="83" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dash-company.png">
            <table cellspacing="0" cellpadding="2" style="margin-top: 15px;">
                <tbody>
                    <tr><td>Company:</td>
                        <td><?php echo $model->porfile_camp_name; ?></td></tr>
                    <tr><td>Function:</td>
                        <td><?php echo $model->porfile_camp_function; ?></td></tr>
                    <tr><td>Country:</td>
                        <td><?php if ($model->porfile_camp_country){
                         echo IsoCountry::model()->GetCountryName($model->porfile_camp_country);
                        } 
                        ?></td></tr>
                    <tr><td>Email:</td>
                        <td><?php echo $model->porfile_camp_email; ?></td></tr>
                    <tr><td>Website:</td>
                        <td><?php echo $model->porfile_camp_website; ?></td></tr>
                    <tr><td>COC:</td>
                        <td><?php echo $model->porfile_coc; ?></td></tr>
                    
                    </tbody></table>



        </div>
</div>
    <div class="span-9">

        <div class="udetail-box">
            <h3 class="udash-header">Account Statistics</h3>
            <img width="92" height="83" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dash-stats.png">
            <table cellspacing="0" cellpadding="2" style="margin-top: 15px;">
                <tbody>
                    <tr><td>Type of Account:</td>
                        <td></td></tr>
                    <tr><td>Days left:</td>
                        <td></td></tr>
                    <tr><td>Press Releases Sent:</td>
                        <td></td></tr>
                    
                    </tbody></table>

            <div>

                <!-- <a href="/en/porfile/add-credits.html" title="Buy more credits">
                <div class="us-button-buy" style="margin-bottom: 6px; margin-top: 2px;"></div>
                </a> -->



            </div>

        </div>
    </div>
    </div>
