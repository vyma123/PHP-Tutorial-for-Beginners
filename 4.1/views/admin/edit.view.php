<div>

    <div>
        <div>
            <a href="create.php">Edit Term</a>
        </div>
    </div>
    <form action="" method="POST">
        <input type="hidden" name="original-term" value="<?= $model->term ?>" />
        <div>
            <label for="term">Term:</label>
            <input class="form-control" type="text" name="term" id="term" value="<?= $model->term ?>" />
        </div>
        <div>
            <label for="definition">Definition:</label>
            <textarea name="definition" id="definition"><?= $model->definition ?></textarea>
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
</div>