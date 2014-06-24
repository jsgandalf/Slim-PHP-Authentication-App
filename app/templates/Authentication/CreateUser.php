{% extends "Authentication/Base.php" %}

{% block content %}

<div id="infoMessage">{{ error|raw }}</div>

<form action="/create/new/user" method="POST">
<p>
    First Name: <input type="text" name="first_name" id="first_name" value="{{ first_name }}" maxlength="45"/>*
    Last Name: <input type="text" name="last_name" id="last_name"  value="{{ last_name }}" maxlength="45"/>*
</p>
<p>
    Company: <input type="text" name="company" id="company" value="{{ company }}" maxlength="50"/>
</p>
<p>
    Phone: 999-999-9999<input type="text" name="phone" id="phone" value="{{ phone }}" maxlength="14"/>
</p>
<p>
    Email: <input type="text" name="email" id="email" value="{{ email }}" maxlength="50"/>*
</p>
<p>
    Password: <input type="password" name="password" id="password" maxlength="20"/>*
</p>
<p>
	Group: 
    {% if groups is not empty %}
    	<select name="group" id="group">
            {% for group in groups %}
                <option value="{{ group.id }}">{{ group.name }}</option>
            {% endfor %}
        </select>
    {% endif %}
</p>
<p>
    <input type="submit" value="Create User" />
</p>
</form>
{% endblock content %}