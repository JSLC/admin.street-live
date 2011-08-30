<div class="stages view">
<h2><?php  __('Stage');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stage['Stage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stage['Stage']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($stage['Country']['name'], array('controller' => 'countries', 'action' => 'view', $stage['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($stage['City']['name'], array('controller' => 'cities', 'action' => 'view', $stage['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Place'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($stage['Place']['name'], array('controller' => 'places', 'action' => 'view', $stage['Place']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stage', true), array('action' => 'edit', $stage['Stage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Stage', true), array('action' => 'delete', $stage['Stage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stage['Stage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Places', true), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place', true), array('controller' => 'places', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Performances');?></h3>
	<?php if (!empty($stage['Performance'])):?>
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
		foreach ($stage['Performance'] as $performance):
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
