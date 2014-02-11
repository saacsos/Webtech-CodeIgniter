<div class="panel panel-info">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-plus"></span>
        Add Teacher
    </div>
    <div class="panel-body">

<?php echo validation_errors('<div class="panel panel-danger"><div class="panel-heading">', '</div></div>'); ?>
<?php echo form_open("teachers/add"); ?>

<div class="input-group">
<?php 
echo form_label('Firstname', 'firstname', array(
    'class' => 'input-group-addon'
)); 
echo form_input(array(
    'name' => 'firstname',
    'value' => (isset($post_data['firstname']))?$post_data['firstname']:"",
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
    'value' => (isset($post_data['lastname']))?$post_data['lastname']:"",
    'class' => 'form-control',
    'placeholder' => 'Teacher Last Name'
)); 
?>
</div>

<?php echo form_submit('add', 'Add Teacher', 'class="btn btn-primary btn-block"'); ?>
<?php echo form_close(); ?>
    </div>
</div>