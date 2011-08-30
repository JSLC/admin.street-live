<div class="performances form">
<?php echo $this->Form->create('Performance');?>
	<fieldset>
		<legend><?php __('Edit Performance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('performer_id');
		echo $this->Form->input('stage_id');
		echo $this->Form->input('performancetype_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('holdingdate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Performance.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Performance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performancetypes', true), array('controller' => 'performancetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performancetype', true), array('controller' => 'performancetypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies', true), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie', true), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>