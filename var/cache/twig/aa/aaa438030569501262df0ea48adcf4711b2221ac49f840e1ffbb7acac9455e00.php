<?php

/* template.twig */
class __TwigTemplate_33a64953ab4d4ffc14cab226062cb68b95b19a3095a03728777d067421f95a12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body>
<div id=\"wrapper\">
    ";
        // line 11
        $this->loadTemplate("head.twig", "template.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("side-bar-menu.twig", "template.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"content-wrapper\">
            ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>
    ";
        // line 16
        $this->loadTemplate("footer.twig", "template.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("configurations.twig", "template.twig", 17)->display($context);
        // line 18
        echo "</div>
";
        // line 19
        $this->loadTemplate("javascript.twig", "template.twig", 19)->display($context);
        // line 20
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->loadTemplate("css.twig", "template.twig", 6)->display($context);
        // line 7
        echo "    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  78 => 7,  75 => 6,  72 => 5,  66 => 4,  61 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  46 => 14,  43 => 13,  40 => 12,  38 => 11,  33 => 8,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block title %}Usuarios{% endblock %} - My Webpage</title>*/
/*     {% block head %}*/
/*         {% include 'css.twig' %}*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*     {% include 'head.twig' %}*/
/*     {% include 'side-bar-menu.twig' %}*/
/*     <div class="content-wrapper">*/
/*             {% block content %}{% endblock %}*/
/*     </div>*/
/*     {% include 'footer.twig' %}*/
/*     {% include 'configurations.twig' %}*/
/* </div>*/
/* {% include 'javascript.twig' %}*/
/* </body>*/
/* </html>*/
