<div class="movies form">
<?php echo $this->Form->create('Movie');?>
	<fieldset>
		<legend><?php __('Edit Movie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('performance_id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Movie.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Movie.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Movies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>