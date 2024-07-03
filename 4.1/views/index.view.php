<div>

  <div>
    <h1><?= $view_bag['heading'];?></h1>
    <form action="" method="GET">
      <div class="form-group">
        <input type="text" name="search" id="search"/>
        <input type="submit" value="Search">
      </div>
    </form>
  </div>
  <table>
    <?php foreach ($model as $item) : ?>
      <tr>
        <td><a href="detail.php?term=<?= $item->term ?>"><?= $item->term ?></a></td>
        <td><?= $item->definition ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>