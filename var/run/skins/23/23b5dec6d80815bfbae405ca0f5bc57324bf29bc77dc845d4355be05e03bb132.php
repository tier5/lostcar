<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/order/parts/link.return.twig */
class __TwigTemplate_c4c49f9066eb6053641ee31d56ae3499a521348a833d11355a30f206f1712e01 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isCapostShippingMethod", array(), "method")) {
            // line 8
            echo "  <li>
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\CanadaPost\\View\\Button\\PopupReturnProducts", "orderId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getOrderId", array(), "method")))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/order/parts/link.return.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order "Return products" link*/
/*  #*/
/*  # @ListChild (list="order.links", weight="30")*/
/*  #}*/
/* */
/* {% if this.order.isCapostShippingMethod() %}*/
/*   <li>*/
/*     {{ widget('\\XLite\\Module\\XC\\CanadaPost\\View\\Button\\PopupReturnProducts', orderId=this.order.getOrderId()) }}*/
/*   </li>*/
/* {% endif %}*/
/* */
