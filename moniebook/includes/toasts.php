<?php 
if(isset($_SESSION['acct_created'])){
    ?>
    <div class='bg-green-200 p-3 rounded-2xl border-1 border-green-600 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['acct_created'] ?></h2>
</div> <?php
unset($_SESSION['acct_created']);
}
?>
<?php 
if(isset($_SESSION['acct_not_created'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['acct_not_created'] ?></h2>
</div> <?php
unset($_SESSION['acct_not_created']);
}
?>
<?php 
if(isset($_SESSION['existing_number'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['existing_number'] ?></h2>
</div> <?php
unset($_SESSION['existing_number']);
}
?>
<?php 
if(isset($_SESSION['mismatch'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo  $_SESSION['mismatch'] ?></h2>
</div> <?php
unset($_SESSION['mismatch']);
}
?>
<?php 
if(isset($_SESSION['input_all_fields'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['input_all_fields'] ?></h2>
</div> <?php
unset($_SESSION['input_all_fields']);
}
?>