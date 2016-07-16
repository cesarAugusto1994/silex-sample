<?php

/* head.twig */
class __TwigTemplate_e0d2043e25c97a90d70993d50e47a3a7bc7d2f41c7d8cfa9ac06e8746ea3a7e4 extends Twig_Template
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
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>S</b>lx</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>S</b>ilex</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">

                <!--

                 AQUI Social

                 -->



                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="{{ path('index') }}" class="logo">*/
/*         <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*         <span class="logo-mini"><b>S</b>lx</span>*/
/*         <!-- logo for regular state and mobile devices -->*/
/*         <span class="logo-lg"><b>S</b>ilex</span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*         <!-- Sidebar toggle button-->*/
/*         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*         </a>*/
/*         <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/* */
/*                 <!--*/
/* */
/*                  AQUI Social*/
/* */
/*                  -->*/
/* */
/* */
/* */
/*                 <!-- Control Sidebar Toggle Button -->*/
/*                 <li>*/
/*                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/
