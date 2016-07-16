<?php

/* breadcrumbs.html.twig */
class __TwigTemplate_96d887e1f2b3cf8307099034e68bebdcb1df8d6055be574ca26292d23b421310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 3
            echo "        ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 4
                echo "            <li class=\"lastItem\">
        ";
            } else {
                // line 6
                echo "            <li>
        ";
            }
            // line 8
            echo "        ";
            if (((null === $this->getAttribute($context["breadcrumb"], "target", array())) || $this->getAttribute($context["loop"], "last", array()))) {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["breadcrumb"], "linkName", array())), "html", null, true);
                echo "
        ";
            } else {
                // line 11
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "target", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["breadcrumb"], "linkName", array())), "html", null, true);
                echo "</a>
        ";
            }
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
            echo "
        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  67 => 13,  59 => 11,  53 => 9,  50 => 8,  46 => 6,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul>*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*         {% if loop.last %}*/
/*             <li class="lastItem">*/
/*         {% else %}*/
/*             <li>*/
/*         {% endif %}*/
/*         {% if breadcrumb.target is null or loop.last %}*/
/*             {{ breadcrumb.linkName|trans }}*/
/*         {% else %}*/
/*             <a href="{{ breadcrumb.target }}">{{ breadcrumb.linkName|trans }}</a>*/
/*         {% endif %}*/
/*         {{ separator }}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
