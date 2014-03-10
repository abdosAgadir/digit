<?php

/* DigitalUserBundle:user:form.html.twig */
class __TwigTemplate_80d4d9f48c635e131e4168c51de9872efc0cf8b45e8812fb71fe4ccf99c394bb extends Twig_Template
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
        echo "<div class=\"well\">
\t<form method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" class=\"btn btn-primary\" />
\t
\t</form>
</div>\t
\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
</div>";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:user:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  26 => 3,  22 => 2,  19 => 1,  48 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  29 => 2,);
    }
}
