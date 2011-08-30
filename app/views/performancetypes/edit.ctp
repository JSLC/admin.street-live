<div class="performancetypes form">
<?php echo $this->Form->create('Performancetype');?>
	<fieldset>
		<legend><?php __('Edit Performancetype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Performancetype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Performancetype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Performancetypes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>