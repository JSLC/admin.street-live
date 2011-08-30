<div class="bloods view">
<h2><?php  __('Blood');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $blood['Blood']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $blood['Blood']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blood', true), array('action' => 'edit', $blood['Blood']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Blood', true), array('action' => 'delete', $blood['Blood']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $blood['Blood']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bloods', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Members');?></h3>
	<?php if (!empty($blood['Member'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Nameyomi'); ?></th>
		<th><?php __('City Id'); ?></th>
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
		foreach ($blood['Member'] as $member):
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
