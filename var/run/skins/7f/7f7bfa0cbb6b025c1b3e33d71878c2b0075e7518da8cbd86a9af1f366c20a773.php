<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/product_details.rating.twig */
class __TwigTemplate_f94ae5a7518bb8fc642bca61b6d3d4c84698b9e325b29578c14444e9769af69a extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\Details\\AverageRating", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/product_details.rating.twig";
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
/*  # Rating value in product info*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="17")*/
/*  #}*/
/* {{ widget('XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\Details\\AverageRating', product=this.product) }}*/
/* */
