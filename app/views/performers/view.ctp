<div class="performers view">
<h2><?php  __('Performer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performer['Performer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performer['Performer']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Performertype'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($performer['Performertype']['name'], array('controller' => 'performertypes', 'action' => 'view', $performer['Performertype']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Begin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performer['Performer']['begin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performer['Performer']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performer['Performer']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performer['Performer']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Performer', true), array('action' => 'edit', $performer['Performer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Performer', true), array('action' => 'delete', $performer['Performer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performer['Performer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performertypes', true), array('controller' => 'performertypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performertype', true), array('controller' => 'performertypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Performances');?></h3>
	<?php if (!empty($performer['Performance'])):?>
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
		foreach ($performer['Performance'] as $performance):
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
<div class="related">
	<h3><?php __('Related Members');?></h3>
	<?php if (!empty($performer['Member'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Nameyomi'); ?></th>
		<th><?php __('City Id'); ?></th>
		<th><?php __('Birthday'); ?></th>
		<th><?php __('Blood Id'); ?></th>
		<th><?php __('Height'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Intro'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($performer['Member'] as $member):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $member['id'];?></td>
			<td><?php echo $member['name'];?></td>
			<td><?php echo $member['nameyomi'];?></td>
			<td><?php echo $member['city_id'];?></td>
			<td><?php echo $member['birthday'];?></td>
			<td><?php echo $member['blood_id'];?></td>
			<td><?php echo $member['height'];?></td>
			<td><?php echo $member['weight'];?></td>
			<td><?php echo $member['intro'];?></td>
			<td><?php echo $member['comments'];?></td>
			<td><?php echo $member['created'];?></td>
			<td><?php echo $member['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'members', 'action' => 'delete', $member['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
