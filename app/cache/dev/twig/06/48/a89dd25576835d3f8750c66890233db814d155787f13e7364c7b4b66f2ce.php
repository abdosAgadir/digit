<?php

/* DigitalUserBundle:User:display.html.twig */
class __TwigTemplate_0648a89dd25576835d3f8750c66890233db814d155787f13e7364c7b4b66f2ce extends Twig_Template
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
\t\t    <i>  par: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo "  </i>
\t        <div class=\"well\">
\t\t\t      ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "
\t        </div>
\t     <p> 
\t\t\t\t\t <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("user_homepage");
            echo "\" class=\"btn\"> 
\t\t\t\t\t\t <i class=\"icon-chevron-left\"></i>
\t\t\t\t\t\t Return Home
\t\t\t\t\t </a>
\t\t\t\t\t <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t\t <i class=\"icon-edit\"></i>
\t\t\t\t\t\t Update Article
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t\t\t<i class=\"icon-trash\"></i>
\t\t\t\t\t\t\tDelete Article
\t\t\t\t\t</a>
\t\t</p>
\t\t";
        } else {
            // line 27
            echo "\t\t        <p style=\"color:red;\"><em>no user found !! </em></p>
\t\t";
        }
        // line 29
        echo "\t";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  82 => 27,  73 => 21,  66 => 17,  59 => 13,  53 => 10,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
