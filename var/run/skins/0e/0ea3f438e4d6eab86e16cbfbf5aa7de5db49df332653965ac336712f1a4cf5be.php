<?php

/* jscontainer/body.twig */
class __TwigTemplate_32dc01d7ba23cd08b822e977808f4ae73b1785cfdac71e7e4e0593bfad890608 extends \XLite\Core\Templating\Twig\Template
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
