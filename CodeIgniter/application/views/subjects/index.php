<div class="container-fluid">
<table class="table table-striped table-bordered table-hover table-responsive">
    <thead>
    <tr class="row">
        <td class="col-md-2 text-center">Subject Code</td>
        <td class="col-md-4 text-center">Subject Name</td>
        <td class="col-md-2 text-center">Teacher</td>
        <td class="col-md-4"></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($subjects as $subject): ?>
    <tr class="row">
        <td class="col-md-2 text-center"><?php echo $subject->subject_code; ?></td>
        <td class="col-md-4"><?php echo $subject->name; ?></td>
        <td class="col-md-2"><?php echo $teacher_list[$subject->teacher_id]; ?></td>
        <td class="col-md-4 text-center">
            <?php 
            echo anchor(
                    "subjects/edit/{$subject->id}", 
                    'Edit', 
                    array(
                        'title' => 'Edit',
                        'class' => 'btn btn-primary'
                    )); 
            ?>
            <?php 
            echo anchor(
                    "subjects/delete/{$subject->id}", 
                    'Delete', 
                    array(
                        'title' => 'Delete',
                        'class' => 'btn btn-danger',
                        'onclick' => "return confirm('Are you sure to delete ({$subject->name})?');"
                    )); 
            ?>
        </td>
        
    </tr>
    <?php endforeach; ?>
    <tr class="row">
        <td colspan="4" class="text-left">
            <?php 
            echo anchor(
                    "subjects/add", 
                    'Add Subject', 
                    array(
                        'title' => 'Add Subject',
                        'class' => 'btn btn-primary'
                    )); 
            ?>
        </td>
    </tr>
    </tbody>
</table>
</div>