<?php

/* ::layout.html.twig */
class __TwigTemplate_038f02f279f1a516ea58d46cce56aa3bf3640d207069324011ed5c4ddeefb99d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>
\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t\t<title>
\t\t\t         ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t\t</title>
\t\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t</head>
\t<body>
\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1>Digital Champ</h1>
\t\t\t\t<p>
\t\t\t\t\t With Symfony :) .
\t\t\t\t</p>

\t\t   </div>
\t\t<section class=\"navigation-block\">
\t
\t\t\t\t<!-- User profile -->
\t\t\t\t<section class=\"user-profile\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/admin.png"), "html", null, true);
        echo "\" alt=\"John Pixel avatar\">
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<strong><a class=\"\" href=\"#\">Connecté : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " </a></strong>
\t\t\t\t\t\t\t\t\t<em>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"), 0, array(), "array"), "html", null, true);
            echo "</em>
\t\t\t\t\t\t\t        <ul>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a title=\"logout\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary btn-flat\">logout</a></li>
\t\t\t\t\t\t\t       </ul>
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t 
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t</section>
\t\t\t\t<!-- /User profile -->
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Main navigation -->
\t\t\t\t<nav role=\"navigation\" class=\"main-navigation nav-collapse\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 48
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 49
            echo "\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t<a class=\"no-submenu\" href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"fam-rosette\"></span>Login</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t ";
        }
        // line 53
        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"no-submenu\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\"><span class=\"fam-heart\"></span>Home Page</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"no-submenu\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><span class=\"fam-add\"></span>Add User</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- /Main navigation -->
\t\t\t\t
\t\t\t</section>
\t\t\t<section role=\"main\" class=\"content-block\">
                   ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t      </section>
\t\t
\t\t";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " 
\t\t\t\t\t                Digital 
\t\t\t\t\t ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chromatron.css"), "html", null, true);
        echo "\"type=\"text/css\" />
\t\t\t";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t   ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 72,  165 => 71,  162 => 70,  157 => 66,  154 => 65,  147 => 10,  144 => 9,  136 => 5,  131 => 75,  129 => 70,  125 => 68,  123 => 65,  112 => 57,  106 => 54,  103 => 53,  97 => 50,  94 => 49,  92 => 48,  77 => 35,  71 => 33,  66 => 31,  62 => 30,  59 => 29,  57 => 28,  52 => 26,  36 => 12,  34 => 9,  31 => 8,  29 => 5,  23 => 1,);
    }
}
