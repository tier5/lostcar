<?php

/* product/info.twig */
class __TwigTemplate_ee8a8a2a5083ad6a58b15db48f3708c7c5c1ce830725bde1a560d69435f1954c extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormModel\\Product\\Info"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ widget('XLite\\View\\FormModel\\Product\\Info') }}*/
/* {#{{ widget('XLite\\View\\Model\\Product', useBodyTemplate='1') }}#}*/
