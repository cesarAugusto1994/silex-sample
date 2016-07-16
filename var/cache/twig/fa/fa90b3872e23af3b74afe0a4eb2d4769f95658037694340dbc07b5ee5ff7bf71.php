<?php

/* side-bar-menu.twig */
class __TwigTemplate_de154883b76fe6c8add8dfa772c9ace5685659a5c4f1c7362a667fe5b08ecdb3 extends Twig_Template
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
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array()), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Usuarios</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("users_list");
        echo "\"><i class=\"fa fa-circle-o\"></i> Listar</a></li>
                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Sessao</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"fa fa-circle-o\"></i> Sair</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>";
    }

    public function getTemplateName()
    {
        return "side-bar-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 46,  61 => 35,  33 => 10,  27 => 7,  19 => 1,);
    }
}
/* <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*         <!-- Sidebar user panel -->*/
/*         <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*                 <img src="{{ app.session.get('user').user.avatar }}" class="img-circle" alt="User Image">*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*                 <p>{{ app.session.get('user').user.username }}</p>*/
/*                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- search form -->*/
/*         <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*                 <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*         </form>*/
/*         <!-- /.search form -->*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/* */
/*             <li class="treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Usuarios</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('users_list') }}"><i class="fa fa-circle-o"></i> Listar</a></li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li class="treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Sessao</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('login') }}"><i class="fa fa-circle-o"></i> Sair</a></li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*         </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/* </aside>*/
