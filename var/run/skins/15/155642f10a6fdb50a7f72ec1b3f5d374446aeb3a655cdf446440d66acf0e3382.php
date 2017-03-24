<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/shipping.address.twig */
class __TwigTemplate_44a583bc4a8f1562ddbe57bcc8be6de418a9453c7dd47291d678a18066e9d0de extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingAddressVisible", array(), "method")) {
            // line 7
            echo "  <div class=\"address\">
    <strong>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping address")), "html", null, true);
            echo "</strong>
  
    <div class=\"address-section shipping-address-section\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "shippingAddress"), "method"), "html", null, true);
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/shipping.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order's shipping address*/
/*  #*/
/*  # @ListChild (list="order.shipping", weight="200")*/
/*  #}*/
/* {% if this.isShippingAddressVisible() %}*/
/*   <div class="address">*/
/*     <strong>{{ t('Shipping address') }}</strong>*/
/*   */
/*     <div class="address-section shipping-address-section">{{ this.orderForm.displayComplexField('shippingAddress') }}</div>*/
/*   </div>*/
/* {% endif %}*/
/* */
