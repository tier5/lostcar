<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/save_button.twig */
class __TwigTemplate_42b533932d813bcd78419da937a2ccf3264789d0124505023c7d0df323a98cd0 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-save layout-editor--switchable'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Regular", "disabled" => "true", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save changes")), "style" => "regular-main-button layout-editor-save_button", "jsCode" => "core.trigger(\"layout.submit\");"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/save_button.twig";
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
/*  # Layout editor save button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="20")*/
/*  #}*/
/* */
/* <div class='layout-editor-save layout-editor--switchable'>*/
/* 	{{ widget('XLite\\View\\Button\\Regular', disabled='true', label=t('Save changes'), style='regular-main-button layout-editor-save_button', jsCode='core.trigger("layout.submit");') }}*/
/* </div>*/
