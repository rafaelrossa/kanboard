<div class="page-header">
    <h2><?= t('Edit a sub-task') ?></h2>
</div>

<form method="post" action="?controller=subtask&amp;action=update&amp;task_id=<?= $task['id'] ?>&amp;subtask_id=<?= $subtask['id'] ?>" autocomplete="off">

    <?= Helper\form_csrf() ?>

    <?= Helper\form_hidden('id', $values) ?>
    <?= Helper\form_hidden('task_id', $values) ?>

    <?= Helper\form_label(t('Title'), 'title') ?>
    <?= Helper\form_text('title', $values, $errors, array('required autofocus')) ?><br/>

    <?= Helper\form_label(t('Status'), 'status') ?>
    <?= Helper\form_select('status', $status_list, $values, $errors) ?><br/>

    <?= Helper\form_label(t('Assignee'), 'user_id') ?>
    <?= Helper\form_select('user_id', $users_list, $values, $errors) ?><br/>

    <?= Helper\form_label(t('Original Estimate'), 'time_estimated') ?>
    <?= Helper\form_numeric('time_estimated', $values, $errors) ?> <?= t('hours') ?><br/>

    <?= Helper\form_label(t('Time Spent'), 'time_spent') ?>
    <?= Helper\form_numeric('time_spent', $values, $errors) ?> <?= t('hours') ?><br/>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
        <?= t('or') ?>
        <a href="?controller=task&amp;action=show&amp;task_id=<?= $task['id'] ?>"><?= t('cancel') ?></a>
    </div>
</form>
