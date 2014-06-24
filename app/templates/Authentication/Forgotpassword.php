{% extends "Authentication/Base.php" %}

{% block content %}
		<div class="row">
			<div class="row">
				<div class="login-box">
					<h2>Forgot Password</h2>
                    {% if error is not empty %}
                    	<p class="error">{{error|raw}}</p>
                    {% else %}
                    	<p>Type in your email below</p>
                    {% endif %}
					<form class="form-horizontal" action="/forgotpassword" method="POST">
						<fieldset>
							<input class="input-large col-xs-12" name="email" id="email" type="text" placeholder="type email" maxlength="50"/>
							
							<div class="clearfix"></div>
							
							<button type="submit" class="btn btn-primary col-xs-12">Submit</button>
						</fieldset>	
					</form>
					<hr>
					<h3>Are you stuck?</h3>
					<p>
						<a href="#">Not a problem, contact our support staff.</a>
					</p>	
				</div>
			</div><!--/row-->
		</div><!--/row-->			
{% endblock %}