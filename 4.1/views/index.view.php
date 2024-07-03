<div>

  <table>

    <?php foreach ($model as $item) : ?>
      <tr>
        <td><a href="detail.php?term=<?= $item->term ?>"><?= $item->term ?></a></td>
        <td><?= $item->definition ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>