<?php

/* /var/www/html/lostcar/skins/customer/order/parts/status.payment.twig */
class __TwigTemplate_f09b0ced901bac9094a5f5201fa29d984c41e7e0f1511c86d1dad632c2093621 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"payment order-status-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentStatusCode", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\OrderStatus\\Payment", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrder", array(), "method"), "useWrapper" => "true"))), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/order/parts/status.payment.twig";
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
/*  # Order payment status*/
/*  #*/
/*  # @ListChild (list="order.status", weight="10")*/
/*  #}*/
/* <div class="payment order-status-{{ this.order.getPaymentStatusCode() }}">{{ widget('\\XLite\\View\\OrderStatus\\Payment', order=this.getOrder(), useWrapper='true') }}</div>*/
/* */
