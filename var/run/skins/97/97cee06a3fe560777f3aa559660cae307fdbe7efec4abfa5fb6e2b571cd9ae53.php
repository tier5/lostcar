<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Paypal/banner/homePage/aboveProducts.twig */
class __TwigTemplate_ed6f9c9a6e5a792c0bab4f816c36ca4b1fd4811cc1871cc2f8d778a1e80f44ed extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "homePage", "position" => "A"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Paypal/banner/homePage/aboveProducts.twig";
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
/*  # @ListChild (list="center", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Banner', page='homePage', position='A') }}*/
