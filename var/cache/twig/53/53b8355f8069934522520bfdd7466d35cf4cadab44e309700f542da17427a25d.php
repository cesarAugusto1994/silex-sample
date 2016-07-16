<?php

/* admin/users_list.twig */
class __TwigTemplate_9547c13e44acf276b7b2dc08c58d625659117fed23ed6d2514f61b3efd61ca4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_tela.twig", "admin/users_list.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'nome_tela' => array($this, 'block_nome_tela'),
            'nome_relatorio' => array($this, 'block_nome_relatorio'),
            'content_form' => array($this, 'block_content_form'),
            'content_table' => array($this, 'block_content_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_tela.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Users List";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_nome_tela($context, array $blocks = array())
    {
        echo "Usuarios WebPDV";
    }

    // line 5
    public function block_nome_relatorio($context, array $blocks = array())
    {
        echo "Usuarios WebPDV";
    }

    // line 6
    public function block_content_form($context, array $blocks = array())
    {
        // line 7
        echo "        <form role=\"form\" class=\"form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("users_list_find");
        echo "\" method=\"get\">
            <div class=\"box-body\">

                <div class=\"form-group\">
                    <label> Loja:
                        <select name=\"loja\">
                            <option value=\"\"></option>
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lojas"]) ? $context["lojas"] : $this->getContext($context, "lojas")));
        foreach ($context['_seq'] as $context["_key"] => $context["loja"]) {
            // line 15
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["loja"], "html", null, true);
            echo "\"
                                        ";
            // line 16
            if (($context["loja"] == (isset($context["loja_request"]) ? $context["loja_request"] : $this->getContext($context, "loja_request")))) {
                // line 17
                echo "                                            selected=\"selected\"
                                        ";
            }
            // line 19
            echo "                                >";
            echo twig_escape_filter($this->env, $context["loja"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        </select>
                    </label>
                </div>

                <div class=\"form-group\">
                    <label> Name:
                    <input type=\"text\" name=\"username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["nome_request"]) ? $context["nome_request"] : $this->getContext($context, "nome_request")), "html", null, true);
        echo "\" class=\"\" placeholder=\"Name\">
                    </label>
                </div>

                <div class=\"form-group has-feedback\">
                    <label> Login:
                        <input type=\"email\" name=\"login\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["login_request"]) ? $context["login_request"] : $this->getContext($context, "login_request")), "html", null, true);
        echo "\" class=\"\" placeholder=\"login\">
                    </label>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-default btn-block btn-flat\">
                            <span class=\"glyphicon glyphicon-search\"> Buscar</span>
                        </button>
                    </div>
                </div>

            </div>
        </form>
    ";
    }

    // line 48
    public function block_content_table($context, array $blocks = array())
    {
        // line 49
        echo "        <div class=\"box-body table-responsive no-padding\">
            <table id=\"example2\" class=\"table table-bordered table-striped\">
                <caption>Lista de Usuarios</caption>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 61
            echo "                    <tr>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["user"], "username", array()), "UTF-8", "iso-8859-1"), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "created", array()), "d/F/y g:i A"), "html", null, true);
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                    <tr>
                        <td><em>Nada encontrado.</em></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"3\"></th>
                </tr>
                </tfoot>
            </table>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "admin/users_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 71,  171 => 67,  163 => 64,  159 => 63,  155 => 62,  152 => 61,  147 => 60,  134 => 49,  131 => 48,  112 => 33,  103 => 27,  95 => 21,  86 => 19,  82 => 17,  80 => 16,  75 => 15,  71 => 14,  60 => 7,  57 => 6,  51 => 5,  45 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends 'template_tela.twig' %}*/
/*     {% block title %}Users List{% endblock %}*/
/* {% block head %}{{ parent() }}{% endblock %}*/
/*     {% block nome_tela %}Usuarios WebPDV{% endblock %}*/
/*     {% block nome_relatorio %}Usuarios WebPDV{% endblock %}*/
/*     {% block content_form %}*/
/*         <form role="form" class="form-inline" action="{{ path('users_list_find') }}" method="get">*/
/*             <div class="box-body">*/
/* */
/*                 <div class="form-group">*/
/*                     <label> Loja:*/
/*                         <select name="loja">*/
/*                             <option value=""></option>*/
/*                             {% for loja in lojas %}*/
/*                                 <option value="{{ loja }}"*/
/*                                         {% if loja == loja_request %}*/
/*                                             selected="selected"*/
/*                                         {% endif %}*/
/*                                 >{{ loja }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label> Name:*/
/*                     <input type="text" name="username" value="{{ nome_request }}" class="" placeholder="Name">*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <div class="form-group has-feedback">*/
/*                     <label> Login:*/
/*                         <input type="email" name="login" value="{{ login_request }}" class="" placeholder="login">*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-xs-4">*/
/*                         <button type="submit" class="btn btn-default btn-block btn-flat">*/
/*                             <span class="glyphicon glyphicon-search"> Buscar</span>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </form>*/
/*     {% endblock %}*/
/*     {% block content_table %}*/
/*         <div class="box-body table-responsive no-padding">*/
/*             <table id="example2" class="table table-bordered table-striped">*/
/*                 <caption>Lista de Usuarios</caption>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>ID</th>*/
/*                     <th>Name</th>*/
/*                     <th>Created</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr>*/
/*                         <td>{{ user.id }}</td>*/
/*                         <td>{{ user.username|convert_encoding('UTF-8', 'iso-8859-1') }}</td>*/
/*                         <td>{{ user.created|date('d/F/y g:i A') }}</td>*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td><em>Nada encontrado.</em></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*                 <tfoot>*/
/*                 <tr>*/
/*                     <th colspan="3"></th>*/
/*                 </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/*         </div>*/
/*     {% endblock %}*/
