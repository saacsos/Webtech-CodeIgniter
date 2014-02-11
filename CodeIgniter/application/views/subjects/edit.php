<div class="panel panel-info">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-pencil"></span>
        Edit Subject
    </div>
    <div class="panel-body">
<?php echo validation_errors('<div class="panel panel-danger"><div class="panel-heading">', '</div></div>'); ?>
<?php echo form_open("subjects/edit/{$subject->id}"); ?>

<div class="input-group">
<?php 
echo form_label('Subject Code', 'subject_code', array(
    'class' => 'input-group-addon'
)); 
echo form_input(array(
    'name' => 'subject_code',
    'value' => (isset($post_data['subject_code']))?$post_data['subject_code']:$subject->subject_code,
    'class' => 'form-control',
    'placeholder' => 'Subject Code'
)); 
?>
</div>

<div class="input-group">
<?php 
echo form_label('Subject Name', 'name', array(
    'class' => 'input-group-addon'
)); 
echo form_input(array(
    'name' => 'name',
    'value' => (isset($post_data['name']))?$post_data['name']:$subject->name,
    'class' => 'form-control',
    'placeholder' => 'Subject Name'
)); 
?>
</div>

<div class="input-group">
<?php 
echo form_label('Teacher', 'teacher_id', array(
    'class' => 'input-group-addon'
)); 
echo form_dropdown(
        'teacher_id', 
        $teacher_list, 
        (isset($post_data['teacher_id']))?$post_data['teacher_id']:$subject->teacher_id,
        'class=form-control'
); 
?>
</div>
<?php echo form_submit('edit', 'Edit Subject', 'class="btn btn-primary btn-block"'); ?>
<?php echo form_close(); ?>
    </div>
</div>