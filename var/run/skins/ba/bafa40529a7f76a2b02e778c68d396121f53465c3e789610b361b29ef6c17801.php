<?php

/* /var/www/html/lostcar/skins/customer/checkout/steps/shipping/parts/subsection.shipping.twig */
class __TwigTemplate_64706f6179a94f6fc2d7cda493654ed68deb7bf15d46b429b523cf307e376072 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subsection shipping-section\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.shipping.selected.sub.shipping"))), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/steps/shipping/parts/subsection.shipping.twig";
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
/*  # Checkout : shipping step : selected state : shipping subsection*/
/*  #*/
/*  # @ListChild (list="checkout.shipping.selected", weight="100")*/
/*  #}*/
/* */
/* <div class="subsection shipping-section">*/
/*   {{ widget_list('checkout.shipping.selected.sub.shipping') }}*/
/* </div>*/
/* */
/* */
