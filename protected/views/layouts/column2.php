<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="last">
	<div id="col-xs-12 col-md-6">
            
	<?php
		$this->widget('booster.widgets.TbTabs', array(
                    
                    'type' => 'tabs',
                    'placement' => 'right',
                    'tabs'=>$this->menu,
                    'htmlOptions'=>array('class'=>'operations' ),
		));
		
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>
