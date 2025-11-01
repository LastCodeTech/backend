
<?php
if(isset( $_SESSION['error'])){
    ?>
    <div class='bg-red-500 p-4 rounded-xl text-xl font-semi-bold text-white'><?php echo  $_SESSION['error'] ?></div>
    <?php
    unset( $_SESSION['error']);
}
?>
<?php
if(isset( $_SESSION['added'])){
    ?>
    <div class='bg-green-500 p-4 rounded-xl text-xl font-semi-bold text-white'><?php echo  $_SESSION['added'] ?></div>
    <?php
    unset( $_SESSION['added']);
}
?>
<?php
if(isset( $_SESSION['not_added'])){
    ?>
    <div class='bg-red-500 p-4 rounded-xl text-xl font-semi-bold text-white'><?php echo  $_SESSION['not_added'] ?></div>
    <?php
    unset( $_SESSION['not_added']);
}
?>
<?php
if(isset($_SESSION['existing_product'])){
    ?>
    <div class='bg-red-500 p-4 rounded-xl text-xl font-semi-bold text-white'><?php echo  $_SESSION['existing_product'] ?></div>
    <?php
    unset( $_SESSION['existing_product']);
}
?>