<div class="performers form">
<?php echo $this->Form->create('Performer');?>
	<fieldset>
		<legend><?php __('Edit Performer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('performertype_id');
		echo $this->Form->input('begin');
		echo $this->Form->input('comment');
		echo $this->Form->input('Member');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Performer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Performer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Performertypes', true), array('controller' => 'performertypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performertype', true), array('controller' => 'performertypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>