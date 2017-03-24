<?php

/* items_list/module/manage/parts/columns/module-main-section/actions/settings.twig */
class __TwigTemplate_3080b7ba5c5cce62cbe3ce4f07ca967c3843eeb6ac6161b8d6b8ff74d797219e extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\SimpleLink", "location" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getSettingsForm", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Settings")), "style" => "regular-button settings"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/module/manage/parts/columns/module-main-section/actions/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Settings link*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\SimpleLink', location=this.module.getSettingsForm(), label=t('Settings'), style='regular-button settings') }}*/
/* */
