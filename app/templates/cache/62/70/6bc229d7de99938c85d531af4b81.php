<?php

/* Authentication/Base.php */
class __TwigTemplate_62706bc229d7de99938c85d531af4b81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t
\t<!-- start: Meta -->
\t<meta charset=\"utf-8\">
\t<title>SimpliQ - Flat & Responsive Bootstrap Admin Template</title>
\t<meta name=\"description\" content=\"SimpliQ - Flat & Responsive Bootstrap Admin Template.\">
\t<meta name=\"author\" content=\"Łukasz Holeczek\">
\t<meta name=\"keyword\" content=\"SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- end: Mobile Specific -->
\t
\t<!-- start: CSS -->
\t<link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"assets/css/style.min.css\" rel=\"stylesheet\">
\t<link href=\"assets/css/retina.min.css\" rel=\"stylesheet\">
\t<!-- end: CSS -->
\t

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t
\t  \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<script src=\"assets/js/respond.min.js\"></script>
\t\t<script src=\"assets/css/ie6-8.css\"></script>
\t\t
\t<![endif]-->
\t
\t<!-- start: Favicon and Touch Icons -->
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/ico/apple-touch-icon-144-precomposed.png\">
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/ico/apple-touch-icon-114-precomposed.png\">
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/ico/apple-touch-icon-72-precomposed.png\">
\t<link rel=\"apple-touch-icon-precomposed\" href=\"http://localhost:8888/bootstrap/simpliq2/ico/apple-touch-icon-57-precomposed.png\">
\t<link rel=\"shortcut icon\" href=\"http://localhost:8888/bootstrap/simpliq2/ico/favicon.png\">
\t<!-- end: Favicon and Touch Icons -->\t
\t\t
</head>

<body>
    <div class=\"container\">
        ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "    </div><!--/container-->
\t
\t
\t<!-- start: JavaScript-->
\t<!--[if !IE]>-->

\t\t\t<script src=\"assets/js/jquery-2.0.3.min.js\"></script>

\t<!--<![endif]-->

\t<!--[if IE]>
\t
\t\t<script src=\"assets/js/jquery-1.10.2.min.js\"></script>
\t
\t<![endif]-->

\t<!--[if !IE]>-->

\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='assets/js/jquery-2.0.3.min.js'>\"+\"<\"+\"/script>\");
\t\t\t</script>

\t<!--<![endif]-->

\t<!--[if IE]>
\t
\t\t<script type=\"text/javascript\">
\t \twindow.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t
\t<![endif]-->
\t<script src=\"assets/js/jquery-migrate-1.2.1.min.js\"></script>
\t<script src=\"assets/js/bootstrap.min.js\"></script>
\t
\t\t
\t
\t\t
\t<!-- theme scripts -->
\t<script src=\"assets/js/custom.min.js\"></script>
\t<script src=\"assets/js/core.min.js\"></script>
\t\t
\t<!-- end: JavaScript-->
\t
</body>
</html>";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Authentication/Base.php";
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  68 => 46,  66 => 45,  20 => 1,  74 => 35,  49 => 13,  45 => 11,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
