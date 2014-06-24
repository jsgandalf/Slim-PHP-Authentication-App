<?php

/* login.php */
class __TwigTemplate_9c8123dcf73de6cbb6305f15eeb72825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "header.php");
        echo "

";
        // line 3
        if (((isset($context["error"]) ? $context["error"] : null) == "")) {
            // line 4
            echo "<p class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
";
        }
        // line 6
        echo "
<p class=\"small\">Hint: brian@nesbot.com / aaaa</p>

<form action=\"/login\" method=\"POST\">
  <p>Email: <input type=\"text\" name=\"email\" id=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email_value"]) ? $context["email_value"] : null), "html", null, true);
        echo "\" /> <span class=\"error\">";
        echo twig_escape_filter($this->env, (isset($context["email_error"]) ? $context["email_error"] : null), "html", null, true);
        echo "</span></p>
  <p>Password: <input type=\"password\" name=\"password\" id=\"password\" /> <span class=\"error\"><?=\$password_error?></span></p>
  <p><input type=\"submit\" value=\"Login\" />
</form>

";
        // line 15
        if (((isset($context["urlRedirect"]) ? $context["urlRedirect"] : null) != "")) {
            // line 16
            echo "<p class=\"small\">(You will redirect to \"";
            echo twig_escape_filter($this->env, (isset($context["urlRedirect"]) ? $context["urlRedirect"] : null), "html", null, true);
            echo "\" upon login)</p>
";
        }
        // line 18
        echo "
";
        // line 19
        echo twig_include($this->env, $context, "footer.php");
    }

    public function getTemplateName()
    {
        return "login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  56 => 18,  50 => 16,  48 => 15,  38 => 10,  32 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
