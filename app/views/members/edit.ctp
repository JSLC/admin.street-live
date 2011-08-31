<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('nameyomi');
		echo $this->Form->input('city_id');
		echo $this->Form->input('birthday',array('dateFormat'=>'Ymd','empty'=>'選択','minYear'=>date('Y')-100,'maxYear'=>date('Y')));
		echo $this->Form->input('blood_id');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('intro');
		echo $this->Form->input('comments');
		echo $this->Form->input('Performer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Member.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bloods', true), array('controller' => 'bloods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood', true), array('controller' => 'bloods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
	</ul>
</div>
