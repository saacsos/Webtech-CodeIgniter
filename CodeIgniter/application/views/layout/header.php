<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Web Technology & Web Services :: CodeIgniter</title>
    <?php echo link_tag('http://normalize-css.googlecode.com/svn/trunk/normalize.css'); ?>
    <?php echo link_tag('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
    <nav>
        <ul class="nav nav-pills nav-justified">
            <li <?php if($this->router->fetch_class() == 'subjects') echo 'class="active"'; ?>>
                <?php echo anchor('subjects/index', 'Subject');
                ?>
            </li>
            <li <?php if($this->router->fetch_class() == 'teachers') echo 'class="active"'; ?>>
                <?php echo anchor('teachers/index', 'Teacher');
                ?>

            </li>
        </ul>

    </nav>
