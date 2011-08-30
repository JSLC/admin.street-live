<div class="cities view">
<h2><?php  __('City');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $city['City']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($city['Country']['name'], array('controller' => 'countries', 'action' => 'view', $city['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $city['City']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City', true), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete City', true), array('action' => 'delete', $city['City']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Places', true), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place', true), array('controller' => 'places', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Members');?></h3>
	<?php if (!empty($city['Member'])):?>
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
		foreach ($city['Member'] as $member):
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
<div class="related">
	<h3><?php __('Related Places');?></h3>
	<?php if (!empty($city['Place'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('City Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['Place'] as $place):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $place['id'];?></td>
			<td><?php echo $place['country_id'];?></td>
			<td><?php echo $place['city_id'];?></td>
			<td><?php echo $place['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'places', 'action' => 'view', $place['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'places', 'action' => 'edit', $place['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'places', 'action' => 'delete', $place['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $place['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Place', true), array('controller' => 'places', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Stages');?></h3>
	<?php if (!empty($city['Stage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('City Id'); ?></th>
		<th><?php __('Place Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['Stage'] as $stage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $stage['id'];?></td>
			<td><?php echo $stage['country_id'];?></td>
			<td><?php echo $stage['city_id'];?></td>
			<td><?php echo $stage['place_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'stages', 'action' => 'view', $stage['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'stages', 'action' => 'edit', $stage['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'stages', 'action' => 'delete', $stage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
