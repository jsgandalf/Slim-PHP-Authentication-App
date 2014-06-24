<?php

/* Authentication/success.php */
class __TwigTemplate_47f7aacb3906e05fc73f0d21e9b8cc94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Authentication/base.php");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Authentication/base.php";
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
\t\t\t\t\t<h2>Success</h2>
                    <p>An activation link has been sent to your email, please allow a few minutes for it to arrive to your inbox.</p>
                    <hr class=\"blue\">
                    <a href=\"/login\" class=\"btn btn-primary col-xs-12\">Login</a>
\t\t\t\t</div>
\t\t\t</div><!--/row-->
\t\t</div><!--/row-->\t\t\t
";
    }

    public function getTemplateName()
    {
        return "Authentication/success.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
