<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/custom_css.twig */
class __TwigTemplate_c869518d01e12d81065595940f05828d83613d6df0e90dbe6e33443931bbd8a1 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-css_editor'>
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\CustomCssEditor", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Edit styles")), "style" => "layout-editor-custom_css_button"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/custom_css.twig";
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
/*  # Layout editor exit button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="17")*/
/*  #}*/
/* */
/* <div class='layout-editor-css_editor'>*/
/*     {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\CustomCssEditor', label=t('Edit styles'), style='layout-editor-custom_css_button') }}*/
/* </div>*/
/* */
