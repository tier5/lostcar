<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/exit_button.twig */
class __TwigTemplate_4a66c461be1c83fadc59495d93976498ff3f75995fa994ac6982b1accf0f9694 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-exit'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Exit editor")), "style" => "layout-editor-exit_button", "jsCode" => "core.trigger(\"layout.disable_editor\");"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/exit_button.twig";
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
/*  # @ListChild (list="layout_editor", weight="30")*/
/*  #}*/
/* */
/* <div class='layout-editor-exit'>*/
/* 	{{ widget('XLite\\View\\Button\\Regular', label=t('Exit editor'), style='layout-editor-exit_button', jsCode='core.trigger("layout.disable_editor");') }}*/
/* </div>*/
/* */
