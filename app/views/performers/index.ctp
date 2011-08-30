<div class="performers index">
	<h2><?php __('Performers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('performertype_id');?></th>
			<th><?php echo $this->Paginator->sort('begin');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($performers as $performer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $performer['Performer']['id']; ?>&nbsp;</td>
		<td><?php echo $performer['Performer']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($performer['Performertype']['name'], array('controller' => 'performertypes', 'action' => 'view', $performer['Performertype']['id'])); ?>
		</td>
		<td><?php echo $performer['Performer']['begin']; ?>&nbsp;</td>
		<td><?php echo $performer['Performer']['comment']; ?>&nbsp;</td>
		<td><?php echo $performer['Performer']['created']; ?>&nbsp;</td>
		<td><?php echo $performer['Performer']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $performer['Performer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $performer['Performer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $performer['Performer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performer['Performer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Performer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Performertypes', true), array('controller' => 'performertypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performertype', true), array('controller' => 'performertypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>