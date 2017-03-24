<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/disable_button.twig */
class __TwigTemplate_f17e05f9c6d2fd632fca281f0360969da65394f39047a9a2ce5a254d64217e6f extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-toggle'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Layout editor is")), "style" => "layout-editor-toggle_button", "value" => true))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/disable_button.twig";
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
/*  # @ListChild (list="layout_editor", weight="5")*/
/*  #}*/
/* */
/* <div class='layout-editor-toggle'>*/
/* 	{{ widget('XLite\\View\\FormField\\Input\\Checkbox\\OnOff', label = t('Layout editor is'), style = 'layout-editor-toggle_button', value = true) }}*/
/* </div>*/
/* */
