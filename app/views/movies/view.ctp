<div class="movies view">
<h2><?php  __('Movie');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movie['Movie']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Performance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($movie['Performance']['title'], array('controller' => 'performances', 'action' => 'view', $movie['Performance']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movie['Movie']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movie['Movie']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movie['Movie']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movie['Movie']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie', true), array('action' => 'edit', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Movie', true), array('action' => 'delete', $movie['Movie']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>
