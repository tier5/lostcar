<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/exit_button.twig */
class __TwigTemplate_1e577015d60325cf1a061704945cef8285e36b19fd7a527206f67d2f4d3c6cf4 extends \XLite\Core\Templating\Twig\Template
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
<div class='inline-editor-exit'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Exit product preview")), "style" => "inline-editor-exit_button", "jsCode" => "core.trigger(\"inline_editor.disable\");"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/exit_button.twig";
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
/*  # @ListChild (list="inline_editor", weight="30")*/
/*  #}*/
/* */
/* <div class='inline-editor-exit'>*/
/* 	{{ widget('XLite\\View\\Button\\Regular', label=t('Exit product preview'), style='inline-editor-exit_button', jsCode='core.trigger("inline_editor.disable");') }}*/
/* </div>*/
/* */
