<?php

/* DigitalUserBundle::layout.html.twig */
class __TwigTemplate_095e1c913b9f9a4120df7e8734bd2c0f0076d16be9875c0afafc1dbd2584b2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'user_body' => array($this, 'block_user_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "              
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "

\t
        ";
        // line 11
        $this->displayBlock('user_body', $context, $blocks);
        // line 16
        echo "\t 
";
    }

    // line 11
    public function block_user_body($context, array $blocks = array())
    {
        // line 12
        echo "             
                     
\t\t   
        ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "\t\t
\t\t";
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t
";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  67 => 19,  64 => 18,  57 => 12,  54 => 11,  49 => 16,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  48 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  29 => 2,);
    }
}
