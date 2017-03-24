<?php

/* /var/www/html/lostcar/skins/customer/items_list/order/parts/spec.date.twig */
class __TwigTemplate_8addff9bc800ba2894896189439ec8ae75772e0f5f1de9398fb7c501d1868ac1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"date\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "date", array())), "method"), "html", null, true);
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/order/parts/spec.date.twig";
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
/*  # Orders list item : spec : date*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="300")*/
/*  #}*/
/* <li class="date">{{ this.formatTime(this.order.date) }}</li>*/
