<?php

/* /var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/add2cart_popup.twig */
class __TwigTemplate_45cd0172244643c517ebb857d89c08cf67e7da24daac456a1fad7b0480bab98b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPayWithAmazonActive", array(), "method")) {
            // line 7
            echo "  <div id=\"payWithAmazonDiv_add2c_popup_btn\" class=\"pay-with-amazon-button add2cart-popup-pay-with-amazon\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/add2cart_popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="add2cart_popup.item", weight="1000")*/
/*  #}*/
/* {% if this.isPayWithAmazonActive() %}*/
/*   <div id="payWithAmazonDiv_add2c_popup_btn" class="pay-with-amazon-button add2cart-popup-pay-with-amazon"></div>*/
/* {% endif %}*/
/* */
