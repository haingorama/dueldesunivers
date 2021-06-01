{% include '/header.php' %}

{% include '/aside.php' %}

<form class="form-signin" method="POST" action="/login" style="position: relative; z-index: index 2;">
	<h2 class="form-signin-heading">Welcome Back</h2>
	<?php
	if (isset($errorMsg)) {
		echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
	}
	?>
	<input type="text" class="form-control" name="username" placeholder="Nickname" required="" autofocus="" />
	<input type="password" class="form-control" name="password" placeholder="Password" required="" />
	<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>

{% include '/footer.php' %}