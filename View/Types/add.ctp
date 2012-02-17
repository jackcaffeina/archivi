<div class="types form">
<?php echo $this->Form->create('Type');?>
	<fieldset>
		<legend><?php echo __('Add Type'); ?></legend>
	<?php
		echo $this->Form->input('codice');
		echo $this->Form->input('desc_it');
		echo $this->Form->input('desc_en');
		echo $this->Form->input('tt');
		echo $this->Form->input('act');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
