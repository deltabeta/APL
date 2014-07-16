 <div class="row">
        <?php echo $form->labelEx($model, 'user_package_id'); ?>
        <?php echo $form->textField($model, 'user_package_id'); ?>
        <?php echo $form->error($model, 'user_package_id'); ?>
         
         

        <div class="row">
	<div class="row">
        <?php echo $form->labelEx($model, 'user_registered'); ?>
        <?php echo $form->textField($model, 'user_registered'); ?>
        <?php echo $form->error($model, 'user_registered'); ?>
                </div>
        
                <div class="row">
        <?php echo $form->labelEx($model, 'user_verified'); ?>
        <?php echo $form->textField($model, 'user_verified'); ?>
        <?php echo $form->error($model, 'user_verified'); ?>
                </div>
        
                <div class="row">
        <?php echo $form->labelEx($model, 'user_activity'); ?>
        <?php echo $form->textField($model, 'user_activity'); ?>
        <?php echo $form->error($model, 'user_activity'); ?>
                </div>
        
                <div class="row">
        <?php echo $form->labelEx($model, 'user_deactivated'); ?>
        <?php echo $form->textField($model, 'user_deactivated'); ?>
        <?php echo $form->error($model, 'user_deactivated'); ?>
                </div>
        
                <div class="row">
        <?php echo $form->labelEx($model, 'user_password_request'); ?>
        <?php echo $form->textField($model, 'user_password_request'); ?>
        <?php echo $form->error($model, 'user_password_request'); ?>
                </div>
            
            <div class="row">
        <?php echo $form->labelEx($model, 'porfile_country'); ?>
        <?php echo $form->textField($model, 'porfile_country'); ?>
        <?php echo $form->error($model, 'porfile_country'); ?>
                </div>
            
        	<div class="row">
        <?php echo $form->labelEx($model, 'porfile_camp_country'); ?>
        <?php echo $form->textField($model, 'porfile_camp_country'); ?>
        <?php echo $form->error($model, 'porfile_camp_country'); ?>
                </div>
