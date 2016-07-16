<?php

/* admin/index.twig */
class __TwigTemplate_6100ccc008525d713e032bd07b674fac6050257d49548630839894dfbeb38aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "admin/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (array_key_exists("sucesso", $context)) {
            // line 4
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                        aria-hidden=\"true\">×</span></button>
            <strong>Sucesso!</strong> ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["sucesso"]) ? $context["sucesso"] : $this->getContext($context, "sucesso")), "html", null, true);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'template.twig' %}*/
/* {% block content %}*/
/*     {% if sucesso is defined %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                         aria-hidden="true">×</span></button>*/
/*             <strong>Sucesso!</strong> {{ sucesso }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
