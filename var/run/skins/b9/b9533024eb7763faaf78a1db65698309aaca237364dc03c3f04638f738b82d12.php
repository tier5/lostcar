<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/action.shipping_status.twig */
class __TwigTemplate_40119a9b82c72d92b41d475a8857975546425c02b1626bb6e0db7ef0a953c1c0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"status shipping-status\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\OrderStatus\\Shipping", "label" => "Shipping status", "fieldName" => "shippingStatus", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "attributes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderStatusAttributes", array(0 => "shipping"), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/action.shipping_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping order status selector*/
/*  #*/
/*  # @ListChild (list="order.actions.statuses", weight="100")*/
/*  #}*/
/* */
/* <div class="status shipping-status">*/
/*   {{ widget('\\XLite\\View\\FormField\\Select\\OrderStatus\\Shipping', label='Shipping status', fieldName='shippingStatus', order=this.order, attributes=this.getOrderStatusAttributes('shipping')) }}*/
/* </div>*/
/* */
