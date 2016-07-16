<?php

/* admin/index.twig */
class __TwigTemplate_a649149cbe775476476281eea8424fcc367dfb1df00cbbcf5322308f78896385 extends Twig_Template
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
        echo $this->env->getExtension('renderBreadCrumbs')->renderBreadCrumbs();
        echo "
    ";
        // line 4
        if (array_key_exists("sucesso", $context)) {
            // line 5
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                        aria-hidden=\"true\">×</span></button>
            <strong>Sucesso!</strong> ";
            // line 8
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
        return array (  43 => 8,  38 => 5,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'template.twig' %}*/
/* {% block content %}*/
/*     {{renderBreadCrumbs()}}*/
/*     {% if sucesso is defined %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                         aria-hidden="true">×</span></button>*/
/*             <strong>Sucesso!</strong> {{ sucesso }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
