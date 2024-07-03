<div>

    <div>
        <div>
            <a href="create.php">Delete Term</a>
        </div>
    </div>
    <div class="">
        Are you sure you want to delete <?= $model->term ?>
    </div>
    <form action="" method="POST">
        <input type="hidden" name="term" value="<?= $model->term ?>" />
        <div>
            <input type="submit" value="Delete">
        </div>
    </form>
</div>