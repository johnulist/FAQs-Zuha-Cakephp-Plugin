<div class="faqs form">
<?php echo $this->Form->create('Faq');?>
	<fieldset>
 		<legend><?php echo __('Admin Add Faq'); ?></legend>
	<?php
		echo $this->Form->input('faq_type_id');
		echo $this->Form->input('question');
		echo $this->Form->input('answer');
		echo $this->Form->input('order');
		echo $this->Form->input('is_public');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Faqs', true), array('action' => 'index'));?></li>
	</ul>
</div>