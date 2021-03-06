<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">GNU Linux User's Group</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
			<!--<li class="{{ Request::is('') ? "active" : "" }}"><a href="/download">Download</a></li>-->
			<li class="{{ Request::is('feedback') ? "active" : "" }}"><a href="/feedback">Feedback</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>