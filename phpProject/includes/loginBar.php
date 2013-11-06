	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="index.php">Project Moodle</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">Sobre</a></li>
						<li><a href="#contact">Contato</a></li>
						<li>
							<a href="#name">
							<?php 
								echo $_SESSION['username'];
							?>
							</a>
						</li>
						<li><a href="#img">IMG</a></li>
						<li><a href="../functions/session_logout.php">Logout</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>