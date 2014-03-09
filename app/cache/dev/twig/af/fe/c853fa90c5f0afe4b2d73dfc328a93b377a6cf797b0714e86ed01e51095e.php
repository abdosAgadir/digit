<?php

/* DigitalUserBundle:User:form.html.twig */
class __TwigTemplate_affec853fa90c5f0afe4b2d73dfc328a93b377a6cf797b0714e86ed01e51095e extends Twig_Template
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
\t</form>
</div>\t
\t<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
</div>";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  26 => 3,  22 => 2,  19 => 1,  49 => 11,  47 => 10,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
