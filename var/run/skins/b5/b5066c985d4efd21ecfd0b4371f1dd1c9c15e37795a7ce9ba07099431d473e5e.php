<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/action.row.twig */
class __TwigTemplate_4b8145583fb74cc3ece5f5a4b3d598f3f60f7dcc9855e9f575b757fa82d9abad extends \XLite\Core\Templating\Twig\Template
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
<div class=\"payment-actions-row\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.actions.paymentActionsRow"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/action.row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Payment actions row*/
/*  #*/
/*  # @ListChild (list="order.actions.statuses", weight="1000")*/
/*  #}*/
/* */
/* <div class="payment-actions-row">*/
/*   {{ widget_list('order.actions.paymentActionsRow') }}*/
/* </div>*/
/* */
