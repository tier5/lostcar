<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig */
class __TwigTemplate_4c807147c84b0e15a1e2efefed37252592390c933bac9c55576cdf47f7b12e87 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "categoryPages", "position" => "A"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Paypal Credit banner*/
/*  #*/
/*  # @ListChild (list="center.top", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Banner', page='categoryPages', position='A') }}*/
