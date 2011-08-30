<div class="members index">
	<h2><?php __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('nameyomi');?></th>
			<th><?php echo $this->Paginator->sort('city_id');?></th>
			<th><?php echo $this->Paginator->sort('blood_id');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('intro');?></th>
			<th><?php echo $this->Paginator->sort('comments');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($members as $member):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $member['Member']['id']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['name']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['nameyomi']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['City']['name'], array('controller' => 'cities', 'action' => 'view', $member['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($member['Blood']['name'], array('controller' => 'bloods', 'action' => 'view', $member['Blood']['id'])); ?>
		</td>
		<td><?php echo $member['Member']['height']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['weight']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['intro']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['comments']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['created']; ?>&nbsp;</td>
		<td><?php echo $member['Member']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $member['Member']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['Member']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Member', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bloods', true), array('controller' => 'bloods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blood', true), array('controller' => 'bloods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performers', true), array('controller' => 'performers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performer', true), array('controller' => 'performers', 'action' => 'add')); ?> </li>
	</ul>
</div>