<?php

/* template2.twig */
class __TwigTemplate_376ac73206bf740362f0997f64f35efa70a5012e52e57060cf524f112684be00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "template2.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'nome_tela' => array($this, 'block_nome_tela'),
            'template' => array($this, 'block_template'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <section class=\"content-header\">
        <h1>
            ";
        // line 8
        $this->displayBlock('nome_tela', $context, $blocks);
        // line 9
        echo "        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Usuarios</a></li>
            <li class=\"active\">Perfil</li>
        </ol>
    </section>

    <section class=\"content\">
        ";
        // line 18
        $this->displayBlock('template', $context, $blocks);
        // line 19
        echo "    </section>
";
    }

    // line 8
    public function block_nome_tela($context, array $blocks = array())
    {
    }

    // line 18
    public function block_template($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  71 => 8,  66 => 19,  64 => 18,  53 => 9,  51 => 8,  46 => 5,  43 => 4,  37 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'template.twig' %}*/
/*     {% block title %}{% endblock %}*/
/*     {% block head %}{{ parent() }}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <section class="content-header">*/
/*         <h1>*/
/*             {% block nome_tela %}{% endblock %}*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li><a href="#">Usuarios</a></li>*/
/*             <li class="active">Perfil</li>*/
/*         </ol>*/
/*     </section>*/
/* */
/*     <section class="content">*/
/*         {% block template %}{% endblock %}*/
/*     </section>*/
/* {% endblock %}*/
