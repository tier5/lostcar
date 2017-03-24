<?php

/* product/attributes.twig */
class __TwigTemplate_a80d008c9fc49da99a92a971892156636067c3d5f32b070522d2a316e1273046 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Tabs\\Attributes", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProduct", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/attributes.twig";
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
/*  # "Attributes" tab*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Tabs\\Attributes', product=this.getProduct()) }}*/
/* */
