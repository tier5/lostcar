<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/totals.subtotal.twig */
class __TwigTemplate_53c9e6d73bf7861d0630bbf7fa4a027d7f7d946c6a1021fd9941239a0bdc18e4 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"subtotal\">
  <div class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subtotal")), "html", null, true);
        echo ":</div>
  <div class=\"value\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderSubtotal", array(), "method");
        echo "</div>
  <div class=\"recalc\"></div>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/totals.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : subtotal*/
/*  #*/
/*  # @ListChild (list="order.base.totals", weight="100")*/
/*  #}*/
/* <li class="subtotal">*/
/*   <div class="title">{{ t('Subtotal') }}:</div>*/
/*   <div class="value">{{ this.getOrderSubtotal()|raw }}</div>*/
/*   <div class="recalc"></div>*/
/* </li>*/
/* */
