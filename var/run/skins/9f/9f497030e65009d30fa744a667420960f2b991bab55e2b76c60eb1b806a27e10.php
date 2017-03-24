<?php

/* /var/www/html/lostcar/skins/customer/items_list/order/parts/spec.switcher.twig */
class __TwigTemplate_b8ef606f98c29a6c38a83aebcbf6f61de3b15e32e50ae157b8ec37fe12da4037 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"order-switcher\"><i data-interval=\"0\" data-toggle=\"collapse\" id=\"order-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "orderId", array()), "html", null, true);
        echo "-action\" data-target=\"#order-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "orderId", array()), "html", null, true);
        echo "\" class=\"fa fa-plus-square-o\"></i></li>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/order/parts/spec.switcher.twig";
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
/*  # Orders list item : spec : switcher*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="100")*/
/*  #}*/
/* <li class="order-switcher"><i data-interval="0" data-toggle="collapse" id="order-{{ this.order.orderId }}-action" data-target="#order-{{ this.order.orderId }}" class="fa fa-plus-square-o"></i></li>*/
