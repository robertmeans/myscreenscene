<div class="widget">
    <h2>Users</h2>
    <div class="inner">
    <?php
		$user_count = user_count();
		$suffix = ($user_count != 1) ? 's' : '';
	?>
		Number of Users logged in: <?php echo $user_count; ?>
    </div>
</div>