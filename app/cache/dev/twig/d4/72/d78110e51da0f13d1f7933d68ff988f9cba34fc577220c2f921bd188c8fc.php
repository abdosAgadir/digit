<?php

/* DigitalUserBundle:User:update.html.twig */
class __TwigTemplate_d472d78110e51da0f13d1f7933d68ff988f9cba34fc577220c2f921bd188c8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DigitalUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'user_body' => array($this, 'block_user_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Update User - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_user_body($context, array $blocks = array())
    {
        // line 7
        echo "
   <h2> Update User </h2>
   
   ";
        // line 10
        $this->env->loadTemplate("DigitalUserBundle:User:form.html.twig")->display($context);
        // line 11
        echo "
   
";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  47 => 10,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
