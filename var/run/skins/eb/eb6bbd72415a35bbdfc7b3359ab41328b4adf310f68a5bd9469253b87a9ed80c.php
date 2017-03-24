<?php

/* settings/base.twig */
class __TwigTemplate_34da4e121e6674d4de8fe23fa281e6e8485ab17476072fc5b1d10ae25b5f480b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SettingsDialog"))), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "settings/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }
}
/* {##*/
/*  # Common tab*/
/*  #}*/
/* {{ widget('XLite\\View\\SettingsDialog') }}*/
/* */
/* */
