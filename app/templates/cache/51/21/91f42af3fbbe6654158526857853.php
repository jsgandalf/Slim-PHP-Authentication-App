<?php

/* \Authentication\Login.php */
class __TwigTemplate_512191f42af3fbbe6654158526857853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Authentication/Base.php");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Authentication/Base.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"login-box\">
\t\t\t\t\t<h2>Login to your account</h2>
                    ";
        // line 8
        if ((!twig_test_empty((isset($context["error"]) ? $context["error"] : null)))) {
            // line 9
            echo "                    \t<p class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
                    ";
        }
        // line 11
        echo "\t\t\t\t\t<form class=\"form-horizontal\" action=\"/login\" method=\"POST\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<input class=\"input-large col-xs-12\" name=\"email\" id=\"email\" type=\"text\" placeholder=\"type email\" maxlength=\"50\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["email_value"]) ? $context["email_value"] : null), "html", null, true);
        echo "\"/>

\t\t\t\t\t\t\t<input class=\"input-large col-xs-12\" name=\"password\" id=\"password\" type=\"password\" placeholder=\"type password\" maxlength=\"20\"/>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label class=\"remember\" for=\"remember\"><input type=\"checkbox\" id=\"remember\" />Remember me</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary col-xs-12\">Login</button>
\t\t\t\t\t\t</fieldset>\t
\t\t\t\t\t</form>
\t\t\t\t\t<hr class=\"blue\">
\t\t\t\t\t<h3>Forgot Password?</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"forgotpassword\">No problem, click here to get a new password.</a>
\t\t\t\t\t</p>\t
                    <p>
                        <h3>Don't have an account?</h3> <a href=\"/create/new/user\">Create one here</a>
                        <!--//twig redirect
\t\t\t\t\t\t\tif urlRedirect is not empty
\t\t\t\t\t\t\t\t<p class=\"small\">(You will redirect to \"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["urlRedirect"]) ? $context["urlRedirect"] : null), "html", null, true);
        echo "\" upon login)</p>
                        \tendif -->
                    </p>
\t\t\t\t</div>
\t\t\t</div><!--/row-->\t\t
\t\t</div><!--/row-->\t\t
";
    }

    public function getTemplateName()
    {
        return "\\Authentication\\Login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  49 => 13,  45 => 11,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
