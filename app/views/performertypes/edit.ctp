<div class="performertypes form">
<?php echo $this->Form->create('Performertype');?>
	<fieldset>
		<legend><?php __('Edit Performertype'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Performertype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Performertype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Performertypes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
	</ul>
</div>