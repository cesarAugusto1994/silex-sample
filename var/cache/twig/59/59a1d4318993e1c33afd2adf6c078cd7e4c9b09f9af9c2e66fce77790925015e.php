<?php

/* /users/profile.twig */
class __TwigTemplate_b63b927d72b0c8b37915c08a28c1e5f23c089fa0e4af5befa04b08978c2baef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template2.twig", "/users/profile.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'nome_tela' => array($this, 'block_nome_tela'),
            'nome_relatorio' => array($this, 'block_nome_relatorio'),
            'template' => array($this, 'block_template'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template2.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_nome_tela($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 5
    public function block_nome_relatorio($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 6
    public function block_template($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">

            ";
        // line 10
        if (array_key_exists("sucesso", $context)) {
            // line 11
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">×</span></button>
                    <strong>Sucesso!</strong> ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["sucesso"]) ? $context["sucesso"] : $this->getContext($context, "sucesso")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 17
        echo "            ";
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 18
            echo "                <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">x</span></button>
                    <strong>Erro!</strong> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 24
        echo "
            <!-- Profile Image -->
            <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                    <img class=\"profile-user-img img-responsive img-circle\"
                         src=\"
                        ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array())) > 0)) {
            // line 31
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "html", null, true);
            echo "
                        ";
        } else {
            // line 33
            echo "                            /assets/custom/img/avatar5.png
                        ";
        }
        // line 35
        echo "                         \" alt=\"User profile picture\">
                    <h3 class=\"profile-username text-center\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
                    <p class=\"text-muted text-center\">Software Engineer</p>
                    <p class=\"text-muted text-center\">
                        ";
        // line 39
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "active", array())) {
            // line 40
            echo "                            Ativo
                        ";
        } else {
            // line 42
            echo "                            Inativo
                        ";
        }
        // line 44
        echo "                    </p>

                    <ul class=\"list-group list-group-unbordered\">
                        <li class=\"list-group-item\">
                            <b>Loja</b> <b class=\"pull-right\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loja", array()), "html", null, true);
        echo "</b>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Criado</b> <b class=\"pull-right\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array()), "d/F/y"), "html", null, true);
        echo "</b>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Login</b> <i class=\"pull-right\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</i>
                        </li>
                    </ul>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"col-md-9\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Activity</a></li>
                    <li><a href=\"#timeline\" data-toggle=\"tab\">Timeline</a></li>
                    <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"active tab-pane\" id=\"activity\"></div>
                    <div class=\"tab-pane\" id=\"timeline\"></div>
                    <div class=\"tab-pane\" id=\"settings\">
                        <form class=\"form-horizontal\" action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_user", array("idUser" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"username\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Login</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"login\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array()), "html", null, true);
        echo "\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Loja</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"loja\" class=\"selectpicker show-tick\">
                                        <option value=\"\"></option>
                                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lojas"]) ? $context["lojas"] : $this->getContext($context, "lojas")));
        foreach ($context['_seq'] as $context["_key"] => $context["loja"]) {
            // line 96
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["loja"], "html", null, true);
            echo "\"
                                                    ";
            // line 97
            if (($context["loja"] == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loja", array()))) {
                // line 98
                echo "                                                        selected=\"selected\"
                                                    ";
            }
            // line 100
            echo "                                            >";
            echo twig_escape_filter($this->env, $context["loja"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Cargo - Soon</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputSkills\" placeholder=\"Skills\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-2 col-sm-10\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Save</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->
    </div><!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "/users/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 102,  219 => 100,  215 => 98,  213 => 97,  208 => 96,  204 => 95,  193 => 87,  184 => 81,  175 => 75,  168 => 71,  148 => 54,  142 => 51,  136 => 48,  130 => 44,  126 => 42,  122 => 40,  120 => 39,  114 => 36,  111 => 35,  107 => 33,  101 => 31,  99 => 30,  91 => 24,  85 => 21,  80 => 18,  77 => 17,  71 => 14,  66 => 11,  64 => 10,  59 => 7,  56 => 6,  50 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'template2.twig' %}*/
/*     {% block title %}Perfil{% endblock %}*/
/* {% block head %}{{ parent() }}{% endblock %}*/
/*     {% block nome_tela %}Perfil{% endblock %}*/
/*     {% block nome_relatorio %}Perfil{% endblock %}*/
/* {% block template %}*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/* */
/*             {% if sucesso is defined %}*/
/*                 <div class="alert alert-success" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                                 aria-hidden="true">×</span></button>*/
/*                     <strong>Sucesso!</strong> {{ sucesso }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if error is defined and error|length > 0 %}*/
/*                 <div class="alert alert-danger alert-dismissable" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                                 aria-hidden="true">x</span></button>*/
/*                     <strong>Erro!</strong> {{ error }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <!-- Profile Image -->*/
/*             <div class="box box-primary">*/
/*                 <div class="box-body box-profile">*/
/*                     <img class="profile-user-img img-responsive img-circle"*/
/*                          src="*/
/*                         {% if user.avatar|length > 0 %}*/
/*                             {{ user.avatar }}*/
/*                         {% else %}*/
/*                             /assets/custom/img/avatar5.png*/
/*                         {% endif %}*/
/*                          " alt="User profile picture">*/
/*                     <h3 class="profile-username text-center">{{ user.username }}</h3>*/
/*                     <p class="text-muted text-center">Software Engineer</p>*/
/*                     <p class="text-muted text-center">*/
/*                         {% if user.active %}*/
/*                             Ativo*/
/*                         {% else %}*/
/*                             Inativo*/
/*                         {% endif %}*/
/*                     </p>*/
/* */
/*                     <ul class="list-group list-group-unbordered">*/
/*                         <li class="list-group-item">*/
/*                             <b>Loja</b> <b class="pull-right">{{ user.loja }}</b>*/
/*                         </li>*/
/*                         <li class="list-group-item">*/
/*                             <b>Criado</b> <b class="pull-right">{{ user.created|date('d/F/y') }}</b>*/
/*                         </li>*/
/*                         <li class="list-group-item">*/
/*                             <b>Login</b> <i class="pull-right">{{ user.email }}</i>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /.box -->*/
/*         </div><!-- /.col -->*/
/*         <div class="col-md-9">*/
/*             <div class="nav-tabs-custom">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>*/
/*                     <li><a href="#timeline" data-toggle="tab">Timeline</a></li>*/
/*                     <li><a href="#settings" data-toggle="tab">Settings</a></li>*/
/*                 </ul>*/
/*                 <div class="tab-content">*/
/*                     <div class="active tab-pane" id="activity"></div>*/
/*                     <div class="tab-pane" id="timeline"></div>*/
/*                     <div class="tab-pane" id="settings">*/
/*                         <form class="form-horizontal" action="{{ path('update_user', { idUser : user.id }) }}">*/
/*                             <div class="form-group">*/
/*                                 <label for="inputName" class="col-sm-2 control-label">Name</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" class="form-control" id="inputName" name="username" value="{{ user.username }}" placeholder="Name">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail" class="col-sm-2 control-label">Email</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="email" class="form-control" id="inputEmail" name="email" value="{{ user.email }}" placeholder="Email">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputName" class="col-sm-2 control-label">Login</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" class="form-control" id="inputName" name="login" value="{{ user.login }}" placeholder="Name">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputExperience" class="col-sm-2 control-label">Loja</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="loja" class="selectpicker show-tick">*/
/*                                         <option value=""></option>*/
/*                                         {% for loja in lojas %}*/
/*                                             <option value="{{ loja }}"*/
/*                                                     {% if loja == user.loja %}*/
/*                                                         selected="selected"*/
/*                                                     {% endif %}*/
/*                                             >{{ loja }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputSkills" class="col-sm-2 control-label">Cargo - Soon</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" class="form-control" id="inputSkills" placeholder="Skills">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-2 col-sm-10">*/
/*                                     <button type="submit" class="btn btn-danger">Save</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div><!-- /.tab-pane -->*/
/*                 </div><!-- /.tab-content -->*/
/*             </div><!-- /.nav-tabs-custom -->*/
/*         </div><!-- /.col -->*/
/*     </div><!-- /.row -->*/
/* {% endblock %}*/
/* */
