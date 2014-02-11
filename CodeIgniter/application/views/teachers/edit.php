<div class="panel panel-info">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-pencil"></span>
        Edit Subject
    </div>
    <div class="panel-body">
<?php echo validation_errors('<div class="panel panel-danger"><div class="panel-heading">', '</div></div>'); ?>
<?php echo form_open("teachers/edit/{$teacher->id}"); ?>

<div class="input-group">
<?php 
echo form_label('Firstbname', 'firstname', array(
    'class' => 'input-group-addon'
)); 
echo form_input(array(
    'name' => 'firstname',
    'value' => (isset($post_data['firstname']))?$post_data['firstname']:$teacher->firstname,
    'class' => 'form-control',
    'placeholder' => 'Teacher Firstname'
)); 
?>
</div>

<div class="input-group">
<?php 
echo form_label('Lastname', 'lastname', array(
    'class' => 'input-group-addon'
)); 
echo form_input(array(
    'name' => 'lastname',
    'value' => (isset($post_data['lastname']))?$post_data['lastname']:$teacher->lastname,
    'class' => 'form-control',
    'placeholder' => 'Teacher Lastname'
)); 
?>
</div>

<?php echo form_submit('edit', 'Edit Teacher', 'class="btn btn-primary btn-block"'); ?>
<?php echo form_close(); ?>
    </div>
</div>