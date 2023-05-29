<?php

require_once 'Application/core/sql.php';

$imgs = mysqli_query($link, "SELECT * FROM pic") or die(mysqli_error($link));
$imgs = mysqli_fetch_all($imgs);
echo "<table class='table'> <tr>";
foreach ($imgs as $img) {

?>


    <td scope="row"><img width='300' src='<?= $img[1] ?>'></td>
    


<?php
}
?>
</tr>
</table>