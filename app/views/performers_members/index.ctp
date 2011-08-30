<div class="performersMembers index">
	<h2><?php __('Performers Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('performer_id');?></th>
			<th><?php echo $this->Paginator->sort('member_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($performersMembers as $performersMember):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $performersMember['PerformersMember']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($performersMember['Performer']['name'], array('controller' => 'performers', 'action' => 'view', $performersMember['Performer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($performersMember['Member']['name'], array('controller' => 'members', 'action' => 'view', $performersMember['Member']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $performersMember['PerformersMember']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $performersMember['PerformersMember']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $performersMember['PerformersMember']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performersMember['PerformersMember']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Performers Member', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>