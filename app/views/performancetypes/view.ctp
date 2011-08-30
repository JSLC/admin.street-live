<div class="performancetypes view">
<h2><?php  __('Performancetype');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performancetype['Performancetype']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performancetype['Performancetype']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Performancetype', true), array('action' => 'edit', $performancetype['Performancetype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Performancetype', true), array('action' => 'delete', $performancetype['Performancetype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performancetype['Performancetype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Performancetypes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performancetype', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Performances');?></h3>
	<?php if (!empty($performancetype['Performance'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Performer Id'); ?></th>
		<th><?php __('Stage Id'); ?></th>
		<th><?php __('Performancetype Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Holdingdate'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($performancetype['Performance'] as $performance):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $performance['id'];?></td>
			<td><?php echo $performance['title'];?></td>
			<td><?php echo $performance['performer_id'];?></td>
			<td><?php echo $performance['stage_id'];?></td>
			<td><?php echo $performance['performancetype_id'];?></td>
			<td><?php echo $performance['comment'];?></td>
			<td><?php echo $performance['holdingdate'];?></td>
			<td><?php echo $performance['created'];?></td>
			<td><?php echo $performance['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'performances', 'action' => 'view', $performance['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'performances', 'action' => 'edit', $performance['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'performances', 'action' => 'delete', $performance['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
