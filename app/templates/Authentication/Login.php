{% extends "Authentication/Base.php" %}

{% block content %}
		<div class="row">
			<div class="row">
				<div class="login-box">
					<h2>Login to your account</h2>
                    {% if error is not empty %}
                    	<p class="error">{{error}}</p>
                    {% endif %}
					<form class="form-horizontal" action="/login" method="POST">
						<fieldset>
							<input class="input-large col-xs-12" name="email" id="email" type="text" placeholder="type email" maxlength="50" value="{{email_value}}"/>

							<input class="input-large col-xs-12" name="password" id="password" type="password" placeholder="type password" maxlength="20"/>

							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							
							<div class="clearfix"></div>
							
							<button type="submit" class="btn btn-primary col-xs-12">Login</button>
						</fieldset>	
					</form>
					<hr class="blue">
					<h3>Forgot Password?</h3>
					<p>
						<a href="forgotpassword">No problem, click here to get a new password.</a>
					</p>	
                    <p>
                        <h3>Don't have an account?</h3> <a href="/create/new/user">Create one here</a>
                        <!--//twig redirect
							if urlRedirect is not empty
								<p class="small">(You will redirect to "{{ urlRedirect}}" upon login)</p>
                        	endif -->
                    </p>
				</div>
			</div><!--/row-->		
		</div><!--/row-->		
{% endblock %}		