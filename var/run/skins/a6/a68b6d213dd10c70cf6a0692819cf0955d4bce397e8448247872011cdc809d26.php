<?php

/* items_list/model/table/parts/create.twig */
class __TwigTemplate_f9c1513ed478b3201da468f036914a60069f0e7c2e824adb909925df3b9c3487 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCreateButtonLabel", array(), "method"))), "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCreateURL", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/create.twig";
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
/*  # Create entity button*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Link', label=t(this.getCreateButtonLabel()), location=this.getCreateURL()) }}*/
/* */
