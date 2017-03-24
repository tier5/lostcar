<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/order/order/payment_actions/recharge.twig */
class __TwigTemplate_1a8c4844046d24fa404fc74e6b54098068b94e3ba7dcf8260237af6404d19de7 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowRecharge", array(), "method")) {
            // line 9
            echo "  <div class=\"recharge-button-container\">
  
  <button type=\"button\" class=\"btn regular-button create-inline\" onclick=\"javascript: ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRechargeJsCode", array(), "method"), "html", null, true);
            echo ";\">
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Authorize/charge the difference")), "html", null, true);
            echo "
  </button>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/order/order/payment_actions/recharge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Payment actions unit*/
/*  #*/
/*  #*/
/*  # @ListChild (list="order.actions.paymentActionsRow", weight="19000") */
/*  #}*/
/* */
/* {% if this.isAllowRecharge() %}*/
/*   <div class="recharge-button-container">*/
/*   */
/*   <button type="button" class="btn regular-button create-inline" onclick="javascript: {{ this.getRechargeJsCode() }};">*/
/*     {{ t('Authorize/charge the difference') }}*/
/*   </button>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
