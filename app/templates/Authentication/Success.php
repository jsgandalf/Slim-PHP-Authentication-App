{% extends "Authentication/base.php" %}

{% block content %}
		<div class="row">
			<div class="row">
				<div class="login-box">
					<h2>Success</h2>
                    <p>An activation link has been sent to your email, please allow a few minutes for it to arrive to your inbox.</p>
                    <hr class="blue">
                    <a href="/login" class="btn btn-primary col-xs-12">Login</a>
				</div>
			</div><!--/row-->
		</div><!--/row-->			
{% endblock %}