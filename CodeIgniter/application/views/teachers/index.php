<div class="container-fluid">
<table class="table table-striped table-bordered table-hover table-responsive">
    <thead>
    <tr class="row">
        <td class="col-md-8 text-center" colspan="2">Teacher Name</td>
        <td class="col-md-4"></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($teachers as $teacher): ?>
    <tr class="row">
        <td class="col-md-4"><?php echo $teacher->firstname; ?></td>
        <td class="col-md-4"><?php echo $teacher->lastname; ?></td>
        <td class="col-md-4 text-center">
            <?php 
            echo anchor(
                    "teachers/edit/{$teacher->id}", 
                    'Edit', 
                    array(
                        'title' => 'Edit',
                        'class' => 'btn btn-primary'
                    )); 
            ?>
            <?php 
            echo anchor(
                    "teachers/delete/{$teacher->id}", 
                    'Delete', 
                    array(
                        'title' => 'Delete',
                        'class' => 'btn btn-danger',
                        'onclick' => "return confirm('Are you sure to delete ({$teacher->firstname} {$teacher->lastname})?');"
                    )); 
            ?>
        </td>
        
    </tr>
    <?php endforeach; ?>
    <tr class="row">
        <td colspan="3" class="text-left">
            <?php 
            echo anchor(
                    "teachers/add", 
                    'Add Teacher', 
                    array(
                        'title' => 'Add Teacher',
                        'class' => 'btn btn-primary'
                    )); 
            ?>
        </td>
    </tr>
    </tbody>
</table>
</div>