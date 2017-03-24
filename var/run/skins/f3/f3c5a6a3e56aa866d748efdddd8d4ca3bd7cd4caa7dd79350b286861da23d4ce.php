<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/save_button.twig */
class __TwigTemplate_0f60240ec2d1df8857aa54936ff336441f1675411ccb41ef9868823897268c18 extends \XLite\Core\Templating\Twig\Template
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
<div class='inline-editor-save inline-editor--switchable'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Regular", "disabled" => "true", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save changes")), "style" => "regular-main-button inline-editor-save_button", "jsCode" => "core.trigger(\"inline_editor.submit\");"))), "html", null, true);
        echo "

    <script type=\"application/javascript\">
        window.inlineEditorCautionMode = ";
        // line 11
        echo (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInlineEditorAvailable", array(), "method")) ? ("false") : ("true"));
        echo ";
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/save_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor save button*/
/*  #*/
/*  # @ListChild (list="inline_editor", weight="20")*/
/*  #}*/
/* */
/* <div class='inline-editor-save inline-editor--switchable'>*/
/* 	{{ widget('XLite\\View\\Button\\Regular', disabled='true', label=t('Save changes'), style='regular-main-button inline-editor-save_button', jsCode='core.trigger("inline_editor.submit");') }}*/
/* */
/*     <script type="application/javascript">*/
/*         window.inlineEditorCautionMode = {{ this.isInlineEditorAvailable() ? 'false' : 'true' }};*/
/*     </script>*/
/* </div>*/
