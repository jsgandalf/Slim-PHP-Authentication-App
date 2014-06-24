<?php

/* header.php */
class __TwigTemplate_e67c5114c0de7fbf5d75887b6ad2f44a extends Twig_Template
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
        echo "<html>
<head>
   <style type=\"text/css\">body {font-size:16px;} .error {background-color:red} .small {font-size:12px}</style>
   <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
   <script type=\"text/javascript\">
   \$(document).ready(function() {
      \$('#login').click(function() {
         \$('#login').attr(\"href\", \$('#login').attr(\"href\") + \"?r=\" + encodeURIComponent(\$(location).attr('pathname')));
      });
   });
   </script>
   
</head>
<body>

<a href=\"/\">Home</a> | <a href=\"/about\">About</a> | <a href=\"/level/contact\">Deep Contact</a>

";
        // line 18
        if (twig_test_empty((isset($context["user"]) ? $context["user"] : null))) {
            // line 19
            echo "   | <a href=\"/login\" id=\"login\">Login</a>
";
        } else {
            // line 21
            echo "   | <a href=\"/private/about\">Private About</a>
   | <a href=\"/private/goodstuff\">Private Good Stuff</a>
   | <a href=\"/logout\">Logout</a>
";
        }
        // line 25
        echo "
<hr/>
";
    }

    public function getTemplateName()
    {
        return "header.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 25,  44 => 21,  40 => 19,  38 => 18,  19 => 1,);
    }
}
