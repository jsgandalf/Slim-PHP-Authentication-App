<?php

/* Authentication/CreateUser.php */
class __TwigTemplate_fe427b34f6b935bfa9a5417ae8dcae7d extends Twig_Template
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
        echo "
<div id=\"infoMessage\">";
        // line 5
        echo (isset($context["error"]) ? $context["error"] : null);
        echo "</div>

<form action=\"/create/new/user\" method=\"POST\">
<p>
    First Name: <input type=\"text\" name=\"first_name\" id=\"first_name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["first_name"]) ? $context["first_name"] : null), "html", null, true);
        echo "\" maxlength=\"45\"/>*
    Last Name: <input type=\"text\" name=\"last_name\" id=\"last_name\"  value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_name"]) ? $context["last_name"] : null), "html", null, true);
        echo "\" maxlength=\"45\"/>*
</p>
<p>
    Company: <input type=\"text\" name=\"company\" id=\"company\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\" maxlength=\"50\"/>
</p>
<p>
    Phone: 999-999-9999<input type=\"text\" name=\"phone\" id=\"phone\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\" maxlength=\"14\"/>
</p>
<p>
    Email: <input type=\"text\" name=\"email\" id=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" maxlength=\"50\"/>*
</p>
<p>
    Password: <input type=\"password\" name=\"password\" id=\"password\" maxlength=\"20\"/>*
</p>
<p>
\tGroup: 
    ";
        // line 26
        if ((!twig_test_empty((isset($context["groups"]) ? $context["groups"] : null)))) {
            // line 27
            echo "    \t<select name=\"group\" id=\"group\">
            ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 29
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name"), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </select>
    ";
        }
        // line 33
        echo "</p>
<p>
    <input type=\"submit\" value=\"Create User\" />
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "Authentication/CreateUser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  93 => 31,  82 => 29,  78 => 28,  75 => 27,  73 => 26,  63 => 19,  57 => 16,  51 => 13,  45 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
