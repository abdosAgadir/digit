<?php

/* DigitalUserBundle:User:add.html.twig */
class __TwigTemplate_0652d99ff9a840261e17a9193a5b77e8b6f6a280532acf680885d2b44f5cce12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DigitalUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DigitalUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Add User ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t          
\t\t        ";
        // line 6
        $this->env->loadTemplate("DigitalUserBundle:user:form.html.twig")->display($context);
        // line 7
        echo "\t\t\t\t<p> 
\t\t\t\t\t <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("user_homepage", array("name" => "ok"));
        echo "\" class=\"btn\"> 
\t\t\t\t\t\t  <i class=\"icon-chevron-left\"></i>Home
\t\t\t\t\t </a>
\t\t\t   </p>

\t";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  29 => 2,);
    }
}
