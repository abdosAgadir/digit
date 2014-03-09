<?php

/* DigitalUserBundle:User:point.html.twig */
class __TwigTemplate_4da2761929d31804a8c03d29a81052b4a2a7215a0e6e887c66828516a0063a92 extends Twig_Template
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
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_user_body($context, array $blocks = array())
    {
        // line 6
        echo "\t     ";
        if ((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) {
            // line 7
            echo "\t        
\t\t    <i>  Bonjour Mr/Mlle: <b>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</b>  </i>
\t        <div class=\"well\">
\t\t\t      Il est <b>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "h:i"), "html", null, true);
            echo " </b>cliquez sur le bouton ( Pointer ) pour valider votre arrivée 
\t        </div>
\t\t\t<div id=\"confirm\" >
\t\t\t
\t\t\t</div>
\t     <p> 
\t\t\t\t\t <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("user_homepage");
            echo "\" class=\"btn\"> 
\t\t\t\t\t\t <i class=\"icon-chevron-left\"></i>
\t\t\t\t\t\t Return Home
\t\t\t\t\t </a>
\t\t\t\t\t <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_point", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t\t <i class=\"icon-edit\"></i>
\t\t\t\t\t\t Pointer
\t\t\t\t\t</a>
\t\t</p>
\t\t";
        } else {
            // line 26
            echo "\t\t        <p style=\"color:red;\"><em>no user found !! </em></p>
\t\t";
        }
        // line 28
        echo "\t";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:point.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  78 => 26,  69 => 20,  62 => 16,  53 => 10,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
