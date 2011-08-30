<div class="performances index">
	<h2><?php __('Performances');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('performer_id');?></th>
			<th><?php echo $this->Paginator->sort('stage_id');?></th>
			<th><?php echo $this->Paginator->sort('performancetype_id');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('holdingdate');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($performances as $performance):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $performance['Performance']['id']; ?>&nbsp;</td>
		<td><?php echo $performance['Performance']['title']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($performance['Performer']['name'], array('controller' => 'performers', 'action' => 'view', $performance['Performer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($performance['Stage']['name'], array('controller' => 'stages', 'action' => 'view', $performance['Stage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($performance['Performancetype']['name'], array('controller' => 'performancetypes', 'action' => 'view', $performance['Performancetype']['id'])); ?>
		</td>
		<td><?php echo $performance['Performance']['comment']; ?>&nbsp;</td>
		<td><?php echo $performance['Performance']['holdingdate']; ?>&nbsp;</td>
		<td><?php echo $performance['Performance']['created']; ?>&nbsp;</td>
		<td><?php echo $performance['Performance']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $performance['Performance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $performance['Performance']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $performance['Performance']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performance['Performance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Performance', true), array('action' => 'add')); ?></li>
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