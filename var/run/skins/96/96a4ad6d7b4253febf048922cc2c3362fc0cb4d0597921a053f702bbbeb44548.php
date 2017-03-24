<?php

/* jscontainer/body.twig */
class __TwigTemplate_953bb232a2e4de8f78ea509c7b4f5ac4739599aa791bc1951af8a00bb63604f9 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "jscontainer.js"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "jscontainer/body.twig";
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
/*  # JS container widget*/
/*  #}*/
/* */
/* {{ widget_list('jscontainer.js') }}*/
/* */
