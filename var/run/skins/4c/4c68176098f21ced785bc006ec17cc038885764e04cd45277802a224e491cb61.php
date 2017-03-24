<?php

/* /var/www/html/lostcar/skins/admin/layout_settings/parts/layout_settings.settings.twig */
class __TwigTemplate_0ab05b60308fc1855907afe40f1a172f7e8565f74dde36edf1255c7c7c8f7ea7 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\LayoutSettings\\Settings"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/layout_settings/parts/layout_settings.settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings", weight="10")*/
/*  #}*/
/* {{ widget('XLite\\View\\LayoutSettings\\Settings') }}*/
/* */
