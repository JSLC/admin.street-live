<div class="performertypes view">
<h2><?php  __('Performertype');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performertype['Performertype']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performertype['Performertype']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Performertype', true), array('action' => 'edit', $performertype['Performertype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Performertype', true), array('action' => 'delete', $performertype['Performertype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performertype['Performertype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Performertypes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performertype', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Performers');?></h3>
	<?php if (!empty($performertype['Performer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Performertype Id'); ?></th>
		<th><?php __('Begin'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($performertype['Performer'] as $performer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $performer['id'];?></td>
			<td><?php echo $performer['name'];?></td>
			<td><?php echo $performer['performertype_id'];?></td>
			<td><?php echo $performer['begin'];?></td>
			<td><?php echo $performer['comment'];?></td>
			<td><?php echo $performer['created'];?></td>
			<td><?php echo $performer['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'performers', 'action' => 'view', $performer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'performers', 'action' => 'edit', $performer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'performers', 'action' => 'delete', $performer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
