<div>

    <div>
        <div>
            <a href="create.php">Create New Term</a>
        </div>
        <!-- <form action="" method="GET">
            <div class="form-group">
                <input type="text" name="search" id="search" />
                <input type="submit" value="Search">
            </div>
        </form> -->
    </div>
    <table>
        <?php foreach ($model as $item) : ?>
            <tr>
                <td><a href="edit.php?key=<?= $item->term ?>">Edit</a></td>
                <td><?= $item->term ?></td>
                <td><?= $item->definition ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>