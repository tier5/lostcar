<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/Paypal/order/payment.id.twig */
class __TwigTemplate_7a60f6c3b6c3381813ef82fc6aa7d307efaa231dd155b7c41b0ec9e320e7d684 extends \XLite\Core\Templating\Twig\Template
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
<!--div class=\"pp-transaction-ids\" IF=\"order.getTransactionIds()\">
  {foreach:order.getTransactionIds(),tid}
  <div>
    {tid.name}:
    {if:tid.url}
      <a href=\"{tid.url}\">{tid.value}</a>
    {else:}
      {tid.value}
    {end:}
  </div>
  {end:}
</div-->
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/Paypal/order/payment.id.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Payment transaction PNREF and PPREF (for PayPal transactions only)*/
/*  #*/
/*  # @ListChild (list="order.payment", weight="110")*/
/*  #}*/
/* */
/* <!--div class="pp-transaction-ids" IF="order.getTransactionIds()">*/
/*   {foreach:order.getTransactionIds(),tid}*/
/*   <div>*/
/*     {tid.name}:*/
/*     {if:tid.url}*/
/*       <a href="{tid.url}">{tid.value}</a>*/
/*     {else:}*/
/*       {tid.value}*/
/*     {end:}*/
/*   </div>*/
/*   {end:}*/
/* </div-->*/
/* */
