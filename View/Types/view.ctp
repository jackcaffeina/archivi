<div class="types view">
<h2><?php  echo __('Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codice'); ?></dt>
		<dd>
			<?php echo h($type['Type']['codice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc It'); ?></dt>
		<dd>
			<?php echo h($type['Type']['desc_it']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc En'); ?></dt>
		<dd>
			<?php echo h($type['Type']['desc_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tt'); ?></dt>
		<dd>
			<?php echo h($type['Type']['tt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Act'); ?></dt>
		<dd>
			<?php echo h($type['Type']['act']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), null, __('Are you sure you want to delete # %s?', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documents');?></h3>
	<?php if (!empty($type['Document'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codice'); ?></th>
		<th><?php echo __('Desc It'); ?></th>
		<th><?php echo __('Desc En'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Citta'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Documenttype Id'); ?></th>
		<th><?php echo __('Source Id'); ?></th>
		<th><?php echo __('Invent'); ?></th>
		<th><?php echo __('Colloc'); ?></th>
		<th><?php echo __('Note It'); ?></th>
		<th><?php echo __('Note En'); ?></th>
		<th><?php echo __('Tt'); ?></th>
		<th><?php echo __('Act'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($type['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id'];?></td>
			<td><?php echo $document['codice'];?></td>
			<td><?php echo $document['desc_it'];?></td>
			<td><?php echo $document['desc_en'];?></td>
			<td><?php echo $document['type_id'];?></td>
			<td><?php echo $document['citta'];?></td>
			<td><?php echo $document['data'];?></td>
			<td><?php echo $document['documenttype_id'];?></td>
			<td><?php echo $document['source_id'];?></td>
			<td><?php echo $document['invent'];?></td>
			<td><?php echo $document['colloc'];?></td>
			<td><?php echo $document['note_it'];?></td>
			<td><?php echo $document['note_en'];?></td>
			<td><?php echo $document['tt'];?></td>
			<td><?php echo $document['act'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), null, __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
