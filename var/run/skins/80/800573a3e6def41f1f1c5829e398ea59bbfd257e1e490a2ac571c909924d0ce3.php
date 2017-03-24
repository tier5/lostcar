<?php

/* /var/www/html/lostcar/skins/customer/order/parts/status.shipping.twig */
class __TwigTemplate_97f07ab11762c93d7c0dbe2bb6b1bc3c7ad025531550c4b5c0f365a88e5b7447 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"shipping order-status-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingStatusCode", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\OrderStatus\\Shipping", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrder", array(), "method"), "useWrapper" => "true"))), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/order/parts/status.shipping.twig";
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
/*  # Order shipping status*/
/*  #*/
/*  # @ListChild (list="order.status", weight="20")*/
/*  #}*/
/* <div class="shipping order-status-{{ this.order.getShippingStatusCode() }}">{{ widget('\\XLite\\View\\OrderStatus\\Shipping', order=this.getOrder(), useWrapper='true') }}</div>*/
/* */
