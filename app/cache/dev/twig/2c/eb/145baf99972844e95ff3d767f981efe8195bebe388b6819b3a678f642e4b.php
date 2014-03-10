<?php

/* DigitalUserBundle:User:index.html.twig */
class __TwigTemplate_2ceb145baf99972844e95ff3d767f981efe8195bebe388b6819b3a678f642e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DigitalUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chromatron.css"), "html", null, true);
        echo "\"type=\"text/css\" />
\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chromatron.css"), "html", null, true);
        echo "\"type=\"text/css\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t     
\t\t 
\t\t\t\t\t<section class=\"tab-content\">
                         
                                <div class=\"tab-pane active\" id=\"horizontal\">
                                
                                    <form class=\"form-horizontal\">
                                        <fieldset>
                                            <legend>Users</legend>
                                        
                                        <h3>Liste of Users</h3>
                                        <table class=\"table\">
                                            <thead>
      
                                                 <tr>
                                                     <th>UserName</th>
                                                     <th>Email</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t <th>Action</th>
                                                 </tr>
                                             </thead>
\t\t\t\t\t\t\t\t\t\t\t <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" > <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/mise/edit.png"), "html", null, true);
            echo "\"> &nbsp &nbsp <a/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"delete\"> <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/mise/supp.png"), "html", null, true);
            echo "\"> &nbsp &nbsp <a/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
                                         </table>
                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   </form>
\t\t\t\t\t\t\t\t\t\t\t\t\t   </div>
                              </section>
\t\t
\t\t 
\t";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "DigitalUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 62,  139 => 61,  136 => 60,  123 => 49,  111 => 43,  104 => 41,  97 => 37,  91 => 34,  86 => 32,  83 => 31,  79 => 30,  56 => 9,  53 => 8,  47 => 6,  42 => 5,  39 => 4,  31 => 3,);
    }
}
