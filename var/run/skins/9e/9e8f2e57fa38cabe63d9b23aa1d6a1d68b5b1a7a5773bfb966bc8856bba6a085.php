<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/top.menu.categories.twig */
class __TwigTemplate_a8df96eb9cadaea825e17dc24153f7d580f88d20246a639c70bd2f0b059993c7 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ((($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isLayoutType1", array(), "method") || $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isLayoutType2", array(), "method")) || $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isLayoutType4", array(), "method"))) {
            // line 8
            echo "<li class=\"leaf has-sub mega-dropdown mobile-hidden\">
    <span class=\"primary-title\">Catalogue</span>
    <div class=\"categories_menu\">
        ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "catalog.top.menu"))), "html", null, true);
            echo "
    </div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/header/top.menu.categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header bar*/
/*  #*/
/*  # @ListChild (list="header.flycategories", weight="3")*/
/*  #}*/
/* */
/* {% if this.layout.isLayoutType1() or this.layout.isLayoutType2() or this.layout.isLayoutType4() %}*/
/* <li class="leaf has-sub mega-dropdown mobile-hidden">*/
/*     <span class="primary-title">Catalogue</span>*/
/*     <div class="categories_menu">*/
/*         {{ widget_list('catalog.top.menu') }}*/
/*     </div>*/
/* </li>*/
/* {% endif %}*/
