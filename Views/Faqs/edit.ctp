<div class="faqs form">
<?php echo $this->Form->create('Faq');?>
	<fieldset>
 		<legend><?php echo __('Admin Edit Faq'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('faq_type_id');
		echo $this->Form->input('question');
		echo $this->Form->input('answer');
		echo $this->Form->input('order');
		echo $this->Form->input('is_public');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Faqs',
		'items' => array(
			$this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Faq.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Faq.id'))),
			$this->Html->link(__('List Faqs', true), array('action' => 'index')),
			)
		),
	)));
?>