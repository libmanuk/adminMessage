<?php
$admin_message = get_option('admin_message');
$view = get_view();
?>

<div class="field">
    <h3>Admin Message</h3>
    <div class="inputs">
        <?php echo $view->formTextarea('admin_message', $admin_message, array('rows' => '10', 'cols' => '60', 'class' => array('textinput'))); ?>
        <p class="explanation">
            Edit this statement to include a custom message on the Admin page.
        </p>
    </div>
</div>
