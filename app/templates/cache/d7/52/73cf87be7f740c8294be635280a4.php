<?php

/* Authentication/Forgotpassword.php */
class __TwigTemplate_d75273cf87be7f740c8294be635280a4 extends Twig_Template
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
\t\t\t\t\t<h2>Forgot Password</h2>
                    ";
        // line 8
        if ((!twig_test_empty((isset($context["error"]) ? $context["error"] : null)))) {
            // line 9
            echo "                    \t<p class=\"error\">";
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "</p>
                    ";
        } else {
            // line 11
            echo "                    \t<p>Type in your email below</p>
                    ";
        }
        // line 13
        echo "\t\t\t\t\t<form class=\"form-horizontal\" action=\"/forgotpassword\" method=\"POST\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<input class=\"input-large col-xs-12\" name=\"email\" id=\"email\" type=\"text\" placeholder=\"type email\" maxlength=\"50\"/>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary col-xs-12\">Submit</button>
\t\t\t\t\t\t</fieldset>\t
\t\t\t\t\t</form>
\t\t\t\t\t<hr>
\t\t\t\t\t<h3>Are you stuck?</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"#\">Not a problem, contact our support staff.</a>
\t\t\t\t\t</p>\t
\t\t\t\t</div>
\t\t\t</div><!--/row-->
\t\t</div><!--/row-->\t\t\t
";
    }

    public function getTemplateName()
    {
        return "Authentication/Forgotpassword.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 11,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
