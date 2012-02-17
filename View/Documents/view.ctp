<div class="documents view">
<h2><?php  echo __('Document');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codice'); ?></dt>
		<dd>
			<?php echo h($document['Document']['codice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc It'); ?></dt>
		<dd>
			<?php echo h($document['Document']['desc_it']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc En'); ?></dt>
		<dd>
			<?php echo h($document['Document']['desc_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Type']['codice'], array('controller' => 'types', 'action' => 'view', $document['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Citta'); ?></dt>
		<dd>
			<?php echo h($document['Document']['citta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($document['Document']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documenttype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Documenttype']['codice'], array('controller' => 'documenttypes', 'action' => 'view', $document['Documenttype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Source']['codice'], array('controller' => 'sources', 'action' => 'view', $document['Source']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invent'); ?></dt>
		<dd>
			<?php echo h($document['Document']['invent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colloc'); ?></dt>
		<dd>
			<?php echo h($document['Document']['colloc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note It'); ?></dt>
		<dd>
			<?php echo h($document['Document']['note_it']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note En'); ?></dt>
		<dd>
			<?php echo h($document['Document']['note_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tt'); ?></dt>
		<dd>
			<?php echo h($document['Document']['tt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Act'); ?></dt>
		<dd>
			<?php echo h($document['Document']['act']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['id']), null, __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documenttypes'), array('controller' => 'documenttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documenttype'), array('controller' => 'documenttypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Images');?></h3>
	<?php if (!empty($document['Image'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Document Id'); ?></th>
		<th><?php echo __('Titolo'); ?></th>
		<th><?php echo __('Immagine'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($document['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id'];?></td>
			<td><?php echo $image['document_id'];?></td>
			<td><?php echo $image['titolo'];?></td>
			<td><?php echo $image['immagine'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), null, __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
