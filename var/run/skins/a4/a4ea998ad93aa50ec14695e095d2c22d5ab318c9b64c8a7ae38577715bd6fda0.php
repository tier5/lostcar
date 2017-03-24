<?php

/* /var/www/html/lostcar/skins/customer/checkout/steps/shipping/parts/address.billing.same.twig */
class __TwigTemplate_cf962114a7ea8dd87c35e1bda5b08f70525b71b251d175ce8d974ef98fe824da extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSameAddressVisible", array(), "method")) {
            // line 8
            echo "  <li class=\"same-address\">
    <input type=\"hidden\" name=\"same_address\" value=\"0\" />
    <div class=\"checkbox\">
    <label>
    \t<input id=\"same_address\" type=\"checkbox\" name=\"same_address\" value=\"1\" ";
            // line 12
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSameAddress", array(), "method")) {
                echo " checked=\"checked\" ";
            }
            echo " />
    \t";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The same as shipping")), "html", null, true);
            echo "
    </label>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/steps/shipping/parts/address.billing.same.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Billing address : save new checkbox*/
/*  #*/
/*  # @ListChild (list="checkout.payment.address.after", weight="200")*/
/*  #}*/
/* */
/* {% if this.isSameAddressVisible() %}*/
/*   <li class="same-address">*/
/*     <input type="hidden" name="same_address" value="0" />*/
/*     <div class="checkbox">*/
/*     <label>*/
/*     	<input id="same_address" type="checkbox" name="same_address" value="1" {% if this.isSameAddress() %} checked="checked" {% endif %} />*/
/*     	{{ t('The same as shipping') }}*/
/*     </label>*/
/*     </div>*/
/*   </li>*/
/* {% endif %}*/
/* */
