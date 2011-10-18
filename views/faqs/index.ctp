<div class="faqs index">
	<h2><?php echo __('Faqs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('faq_type_id');?></th>
			<th><?php echo $this->Paginator->sort('question');?></th>
			<th><?php echo $this->Paginator->sort('answer');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('is_public');?></th>
			<th><?php echo $this->Paginator->sort('creator_id');?></th>
			<th><?php echo $this->Paginator->sort('modifier_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($faqs as $faq):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $faq['Faq']['id']; ?>&nbsp;</td>
		<td><?php echo $faq['Faq']['faq_type_id']; ?>&nbsp;</td>
		<td><?php echo $faq['Faq']['question']; ?>&nbsp;</td>
		<td><?php echo $faq['Faq']['answer']; ?>&nbsp;</td>
		<td><?php echo $faq['Faq']['order']; ?>&nbsp;</td>
		<td><?php echo $faq['Faq']['is_public']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($faq['Creator']['username'], array('controller' => 'users', 'action' => 'view', $faq['Creator']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($faq['Modifier']['username'], array('controller' => 'users', 'action' => 'view', $faq['Modifier']['id'])); ?>
		</td>
		<td><?php echo $faq['Faq']['created']; ?>&nbsp;</td>
		<td><?php echo $faq['Faq']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $faq['Faq']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $faq['Faq']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $faq['Faq']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $faq['Faq']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Faq', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creator', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>



