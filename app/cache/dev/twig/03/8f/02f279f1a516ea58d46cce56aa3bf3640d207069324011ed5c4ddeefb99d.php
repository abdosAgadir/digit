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
\t\t\t\t\t\t\t<strong><a class=\"\" href=\"#\">Abdos Bel</a></strong>
\t\t\t\t\t\t\t<em>Administrator</em>
\t\t\t\t\t\t\t <ul>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a title=\"logout\" href=\"#\" class=\"btn btn-primary btn-flat\">logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t</section>
\t\t\t\t<!-- /User profile -->
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Main navigation -->
\t\t\t\t<nav role=\"navigation\" class=\"main-navigation nav-collapse\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t<a class=\"no-submenu\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\"><span class=\"fam-rosette\"></span>Login</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"no-submenu\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\"><span class=\"fam-heart\"></span>Home Page</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"no-submenu\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("user_add");
        echo "\"><span class=\"fam-add\"></span>Add User</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t ";
        // line 51
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DigitalUserBundle:user:menu"));
        echo "\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- /Main navigation -->
\t\t\t\t
\t\t\t</section>
\t\t\t<section role=\"main\" class=\"content-block\">
                   ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "\t      </section>
\t\t
\t\t";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
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

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t   ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 65
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
        return array (  144 => 65,  141 => 64,  138 => 63,  133 => 59,  130 => 58,  123 => 10,  120 => 9,  112 => 5,  107 => 68,  105 => 63,  101 => 61,  99 => 58,  89 => 51,  84 => 49,  78 => 46,  72 => 43,  52 => 26,  36 => 12,  34 => 9,  31 => 8,  29 => 5,  23 => 1,);
    }
}
