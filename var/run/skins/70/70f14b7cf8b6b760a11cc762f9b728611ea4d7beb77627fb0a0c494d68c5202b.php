<?php

/* /var/www/html/lostcar/skins/customer/shopping_cart/parts/total.subtotal.twig */
class __TwigTemplate_9da21990104fd90bb38df420245de6bd4ae8f17569647ea893822ddc32e3ddd3 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<li class=\"subtotal\">
  <strong>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subtotal")), "html", null, true);
        echo ":</strong>
  <span class=\"cart-subtotal\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getDisplaySubtotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "
  </span>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/shopping_cart/parts/total.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Shopping cart subtotal*/
/*  #*/
/*  # @ListChild (list="cart.totals", weight="10")*/
/*  # @ListChild (list="cart.panel.totals", weight="10")*/
/*  #}*/
/* <li class="subtotal">*/
/*   <strong>{{ t('Subtotal') }}:</strong>*/
/*   <span class="cart-subtotal">*/
/*     {{ widget('XLite\\View\\Surcharge', surcharge=this.cart.getDisplaySubtotal(), currency=this.cart.getCurrency()) }}*/
/*   </span>*/
/* </li>*/
/* */
