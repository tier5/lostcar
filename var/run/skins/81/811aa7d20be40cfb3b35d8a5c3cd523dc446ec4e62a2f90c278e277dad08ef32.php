<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/order/page/parts/action.transactions.tooltip.twig */
class __TwigTemplate_fd3148a2d2e4525b1f1b11bb6ca22f4bffd531ac0091156aac7fad01a88cdecf extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
  var differenceLabelText = '";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDifferenceLabel", array(), "method"), "html", null, true);
        echo "';
</script>

<div class=\"difference-tooltip-container\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "id" => "difference-tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Difference between order total and charged amount")), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/order/page/parts/action.transactions.tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Payment transactions summary*/
/*  #*/
/*  # @ListChild (list="order.actions.paymentActionsRow", weight="100")*/
/*  #}*/
/*  */
/* <script type="text/javascript">*/
/*   var differenceLabelText = '{{ this.getDifferenceLabel() }}';*/
/* </script>*/
/* */
/* <div class="difference-tooltip-container">*/
/*   {{ widget('\\XLite\\View\\Tooltip', id='difference-tooltip', text=t('Difference between order total and charged amount'), isImageTag='true', className='help-icon') }}*/
/* </div>*/
