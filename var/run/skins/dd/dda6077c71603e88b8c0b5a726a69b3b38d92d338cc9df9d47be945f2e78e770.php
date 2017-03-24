<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type3/welcome.menu.catalog.name.twig */
class __TwigTemplate_d6687a6390fde74643d7330a39f240dbaadef419ca2619d5049969a320dc4ee8 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"cat_menu\">
    <span>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Categories")), "html", null, true);
        echo "</span>
    <i class=\"fa fa-bars\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/type3/welcome.menu.catalog.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="welcome.header.menu.block", weight="10")*/
/*  #}*/
/* */
/* <div class="cat_menu">*/
/*     <span>{{ t('Categories') }}</span>*/
/*     <i class="fa fa-bars"></i>*/
/* </div>*/
/* */
