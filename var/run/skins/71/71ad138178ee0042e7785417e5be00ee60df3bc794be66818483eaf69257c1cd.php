<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/message.twig */
class __TwigTemplate_3eadb68e39f857f578655a4b7a05997ce286cfb72d64cb4e15f6633f4cd16804 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-message layout-editor--switchable'>
<span class='layout-editor-message_label'>";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are now in layout editing mode"));
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/message.twig";
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
/*  # Layout editor label*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="10")*/
/*  #}*/
/* */
/* <div class='layout-editor-message layout-editor--switchable'>*/
/* <span class='layout-editor-message_label'>{{ t('You are now in layout editing mode')|raw }}</span>*/
/* </div>*/
