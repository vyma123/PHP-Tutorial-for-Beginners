<?php
$title = 'includes';

include('./../inc/header.php');
require_once('./../inc/functions.php');



$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);


if($category == false) {
    $category = 1;

}
if( $limit == false) {
    $limit = 10;
}



?>


<div>
    <?=
     $category;
    ?>. Limit <?= $limit?>
</div>

<?php
include('./../inc/footer.php');

?>