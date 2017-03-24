<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/common.add-button.twig */
class __TwigTemplate_55edf42c22ff83f58e9292882c441f670dd9424c76713226c598e3dc60376767 extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo "
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\AddButton", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/common.add-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Add to bag buttons*/
/*  #*/
/*  # @ListChild (list="product.details.page.info.buttons-added.cart-buttons", weight="30")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons-added.cart-buttons", weight="30")*/
/*  # @ListChild (list="product.details.page.info.buttons.cart-buttons", weight="20")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons.cart-buttons", weight="20")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\AddButton', product=this.product) }}*/
