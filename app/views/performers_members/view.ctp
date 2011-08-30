<div class="performersMembers view">
<h2><?php  __('Performers Member');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performersMember['PerformersMember']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Performer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($performersMember['Performer']['name'], array('controller' => 'performers', 'action' => 'view', $performersMember['Performer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Member'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($performersMember['Member']['name'], array('controller' => 'members', 'action' => 'view', $performersMember['Member']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Performers Member', true), array('action' => 'edit', $performersMember['PerformersMember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Performers Member', true), array('action' => 'delete', $performersMember['PerformersMember']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performersMember['PerformersMember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Performers Members', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performers Member', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
