<?php

/* DigitalUserBundle:User:login.html.twig */
class __TwigTemplate_6fbd3ae046bd87c5b81c8f2eeefa9cee96012eede617263a31aa303eebb69070 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Login ";
    }

    // line 4
    public function block_user_body($context, array $blocks = array())
    {
        // line 5
        echo "\t          
\t\t\t  
\t\t\t  <fieldset id=\"fild\">
\t\t\t\t                \t<legend>Login</legend>
\t\t\t\t<!--<label class=\"control-label\" for=\"prependedInput\"><h2 id=\"border\">Login</h2></label>-->
                                
\t\t\t\t\t\t<div class=\"form-controls\">
    \t\t\t\t\t\t<div class=\"input-prepend\">
    \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t     <span class=\"add-on\">Utilisateur</span>
    \t\t\t\t\t\t\t     <input type=\"text\" autofocus=\"\" required=\"\" placeholder=\"Votre Nom\" id=\"login\" name=\"username\">

\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
                          \t<div class=\"input-prepend\">
    \t\t\t\t\t\t \t
\t\t\t\t\t\t\t\t     <span class=\"add-on\">Mot de passe</span>
    \t\t\t\t\t\t \t     <input type=\"password\" required=\"\" placeholder=\"Votre Mot de Passe\" id=\"login\" name=\"password\">
\t\t\t\t\t\t  
\t\t\t\t\t\t  </div>
                          <div id=\"list\">
                                <ul>
                                    <li>
                                         <div class=\"form-actions button\">
\t\t\t\t\t    \t\t\t\t\t<button name=\"valider\" type=\"submit\" class=\"btn btn-alt btn-large btn-primary\">Valider</button>
\t\t\t\t\t                     </div>
                                    
\t\t\t\t\t\t\t\t\t</li>
                                     <li>
                                        
\t\t\t\t\t\t\t\t\t\t<div class=\"form-actions button\">
\t\t\t\t\t    \t\t\t\t\t<button type=\"reset\" class=\"btn btn-alt btn-large btn-primary\">Vider</button>
\t\t\t\t\t    \t\t\t\t </div>
                                    
\t\t\t\t\t\t\t\t\t</li>
                                </ul>
                         </div>
\t\t\t\t\t\t             \t</fieldset>
\t\t\t  
\t\t\t  
\t\t\t  
\t";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  146 => 58,  134 => 52,  81 => 32,  53 => 8,  127 => 50,  124 => 55,  114 => 9,  23 => 1,  70 => 20,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 60,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 61,  119 => 42,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 13,  38 => 6,  94 => 28,  89 => 20,  85 => 33,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 36,  88 => 34,  78 => 46,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 62,  136 => 56,  121 => 46,  117 => 45,  105 => 40,  91 => 27,  62 => 23,  49 => 16,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 43,  69 => 25,  47 => 6,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 39,  98 => 31,  96 => 31,  83 => 48,  74 => 14,  66 => 17,  55 => 15,  52 => 26,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 70,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 42,  106 => 5,  103 => 32,  99 => 60,  95 => 58,  92 => 21,  86 => 29,  82 => 27,  80 => 19,  73 => 21,  64 => 18,  60 => 6,  57 => 12,  54 => 11,  51 => 14,  48 => 8,  45 => 7,  42 => 5,  39 => 4,  36 => 12,  33 => 7,  30 => 7,);
    }
}
