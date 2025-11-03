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
if(isset($_SESSION['logged_in'])){
    ?>
    <div class='bg-green-200 p-3 rounded-2xl border-1 border-green-600 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['logged_in'] ?></h2>
</div> <?php
unset($_SESSION['logged_in']);
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
if(isset($_SESSION['not_logged_in'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['not_logged_in'] ?></h2>
</div> <?php
unset($_SESSION['not_logged_in']);
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
<?php 
if(isset($_SESSION['no_acct_found'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['no_acct_found'] ?></h2>
</div> <?php
unset($_SESSION['no_acct_found']);
}
?>
<?php 
if(isset($_SESSION['input_length'])){
    ?>
    <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '><?php echo $_SESSION['input_length'] ?></h2>
</div> <?php
unset($_SESSION['input_length']);
}
?>
