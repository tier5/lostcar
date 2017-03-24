<?php

/* modules_manager/manage/body.twig */
class __TwigTemplate_de0454258f6dd20b01d230fe2bf839b1b499e7267443a02c34c22de38d1295e8 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "modules-manage.top-controls"))), "html", null, true);
        echo "
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ItemsList\\Module\\Manage"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules_manager/manage/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Modules*/
/*  #}*/
/* */
/* {{ widget_list('modules-manage.top-controls') }}*/
/* {{ widget('\\XLite\\View\\ItemsList\\Module\\Manage') }}*/
/* */
