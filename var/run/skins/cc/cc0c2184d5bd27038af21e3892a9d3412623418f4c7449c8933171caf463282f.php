<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Coupons/coupons_minilist.twig */
class __TwigTemplate_1f1a9c917e0d105a135dfeb1a8e9985d8d2484ee85451ae25cfa64ba565e660f extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDiscountCouponSubpanelVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "surcharge", array())), "method")) {
            // line 10
            echo "  <ul class=\"discount-coupons-panel\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDiscountCoupons", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["usedCoupon"]) {
                // line 12
                echo "      <li>
        <span>";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["usedCoupon"], "getPublicName", array(), "method"), "html", null, true);
                echo "</span>
        ";
                // line 14
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDiscountCouponRemoveVisible", array(), "method")) {
                    // line 15
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "coupon", 1 => "remove", 2 => array("id" => $this->getAttribute($context["usedCoupon"], "getId", array(), "method"))), "method"), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remove")), "html", null, true);
                    echo "</a>
        ";
                }
                // line 17
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usedCoupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Coupons/coupons_minilist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  48 => 17,  40 => 15,  38 => 14,  34 => 13,  31 => 12,  27 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Discount coupon subpanel*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals.modifier")*/
/*  # @ListChild (list="checkout.review.selected.items.modifier")*/
/*  # @ListChild (list="invoice.base.totals.modifier.name")*/
/*  #}*/
/* */
/* {% if this.isDiscountCouponSubpanelVisible(this.surcharge) %}*/
/*   <ul class="discount-coupons-panel">*/
/*     {% for usedCoupon in this.getDiscountCoupons() %}*/
/*       <li>*/
/*         <span>{{ usedCoupon.getPublicName() }}</span>*/
/*         {% if this.isDiscountCouponRemoveVisible() %}*/
/*           <a href="{{ this.buildUrl('coupon', 'remove', {'id': usedCoupon.getId()}) }}">{{ t('Remove') }}</a>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
