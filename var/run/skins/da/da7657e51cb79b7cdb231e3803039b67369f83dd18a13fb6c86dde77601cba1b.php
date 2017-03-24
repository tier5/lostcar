<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/shipping.method.twig */
class __TwigTemplate_3de79c8240031b8647169af49e87506867a4907f174f2ec195292bbe782b4aaf extends \XLite\Core\Templating\Twig\Template
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
<div class=\"method\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "shippingMethod"), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/shipping.method.twig";
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
/*  # Order's shipping method*/
/*  #*/
/*  # @ListChild (list="order.shipping", weight="100")*/
/*  #}*/
/* */
/* <div class="method">*/
/*   {{ this.orderForm.displayComplexField('shippingMethod') }}*/
/* </div>*/
/* */
