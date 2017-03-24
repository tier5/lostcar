<?php

/* /var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/cart.twig */
class __TwigTemplate_1b6bc511a240d8627e65f29fb4370e01e8d54fdb9f90b3fd2afd55c15b7de570 extends \XLite\Core\Templating\Twig\Template
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
            echo "<li class=\"button\">
  <div id=\"payWithAmazonDiv_cart_btn\" class=\"pay-with-amazon-button\"></div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/cart.twig";
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
/*  # @ListChild (list="cart.panel.totals", weight="1000")*/
/*  #}*/
/* {% if this.isPayWithAmazonActive() %}*/
/* <li class="button">*/
/*   <div id="payWithAmazonDiv_cart_btn" class="pay-with-amazon-button"></div>*/
/* </li>*/
/* {% endif %}*/
/* */
