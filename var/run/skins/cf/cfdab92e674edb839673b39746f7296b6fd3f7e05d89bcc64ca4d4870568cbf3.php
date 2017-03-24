<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/action.payment_status.twig */
class __TwigTemplate_23673a3d543285913cf4af69dccad461e8a06a6f71cc28a097a460f131030e81 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"status payment-status\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\OrderStatus\\Payment", "label" => "Payment status", "fieldName" => "paymentStatus", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "attributes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderStatusAttributes", array(0 => "payment"), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/action.payment_status.twig";
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
/*  # Payment order status selector*/
/*  #*/
/*  # @ListChild (list="order.actions.statuses", weight="200")*/
/*  #}*/
/* */
/* <div class="status payment-status">*/
/*   {{ widget('\\XLite\\View\\FormField\\Select\\OrderStatus\\Payment', label='Payment status', fieldName='paymentStatus', order=this.order, attributes=this.getOrderStatusAttributes('payment')) }}*/
/* </div>*/
/* */
