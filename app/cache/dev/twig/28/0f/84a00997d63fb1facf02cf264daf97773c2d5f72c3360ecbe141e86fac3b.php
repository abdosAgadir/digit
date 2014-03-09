<?php

/* DigitalUserBundle:User:menu.html.twig */
class __TwigTemplate_280f84a00997d63fb1facf02cf264daf97773c2d5f72c3360ecbe141e86fac3b extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 2
            echo "
    <ul>
\t\t<li>
\t\t\t <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_display", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</a>
\t\t</li>
    </ul>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  19 => 1,  138 => 62,  135 => 61,  132 => 60,  127 => 56,  124 => 55,  117 => 10,  114 => 9,  106 => 5,  101 => 65,  99 => 60,  95 => 58,  93 => 55,  83 => 48,  78 => 46,  72 => 43,  52 => 26,  36 => 12,  23 => 2,  70 => 20,  67 => 19,  64 => 18,  57 => 12,  54 => 11,  49 => 16,  47 => 11,  42 => 8,  39 => 7,  34 => 9,  31 => 8,  48 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  29 => 5,);
    }
}
