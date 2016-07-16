<?php

/* template_tela.twig */
class __TwigTemplate_04a2f3b166e9eaaf5e4f8cd7cf6e0446fa899a54b5f1b013a72d7027d4e552ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "template_tela.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'nome_tela' => array($this, 'block_nome_tela'),
            'nome_relatorio' => array($this, 'block_nome_relatorio'),
            'content_form' => array($this, 'block_content_form'),
            'content_table' => array($this, 'block_content_table'),
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
            <li class=\"active\">Listar</li>
        </ol>
    </section>

    <section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
        // line 22
        $this->displayBlock('nome_relatorio', $context, $blocks);
        echo "</h3>
                </div><!-- /.box-header -->
                ";
        // line 24
        $this->displayBlock('content_form', $context, $blocks);
        // line 25
        echo "            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"box\">
                ";
        // line 29
        $this->displayBlock('content_table', $context, $blocks);
        // line 30
        echo "            </div>
        </div>
    </div>
    </section>
";
    }

    // line 8
    public function block_nome_tela($context, array $blocks = array())
    {
    }

    // line 22
    public function block_nome_relatorio($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content_form($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content_table($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template_tela.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  103 => 24,  98 => 22,  93 => 8,  85 => 30,  83 => 29,  77 => 25,  75 => 24,  70 => 22,  55 => 9,  53 => 8,  48 => 5,  45 => 4,  39 => 3,  34 => 2,  11 => 1,);
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
/*             <li class="active">Listar</li>*/
/*         </ol>*/
/*     </section>*/
/* */
/*     <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">{% block nome_relatorio %}{% endblock %}</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 {% block content_form %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-12">*/
/*             <div class="box">*/
/*                 {% block content_table %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     </section>*/
/* {% endblock %}*/
