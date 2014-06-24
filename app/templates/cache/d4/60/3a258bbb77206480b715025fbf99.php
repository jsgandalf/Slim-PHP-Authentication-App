<?php

/* \Authentication\logout.php */
class __TwigTemplate_d4603a258bbb77206480b715025fbf99 extends Twig_Template
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
        echo "<? require 'header.php' ?>

<h2>You have logged out.</h2>

<p><a href=\"/\">Back Home</a></p>

<? require 'footer.php' ?>";
    }

    public function getTemplateName()
    {
        return "\\Authentication\\logout.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
