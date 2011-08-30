<div class="bloods form">
<?php echo $this->Form->create('Blood');?>
	<fieldset>
		<legend><?php __('Edit Blood'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Blood.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Blood.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bloods', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>