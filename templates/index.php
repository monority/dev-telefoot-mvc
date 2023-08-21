<?php
session_start();
include("header.php");
?>

<div class="index-page">

    <ul class="channels">
        <?php for ($i=0; $i < 7; $i++) { 
            ?>
                <img src="../assets/img/channels/telefootstadium<?=$i?>.webp" alt="">
        <?php } ?>
    </ul>

</div>



<?php
include("footer.php")
    ?>