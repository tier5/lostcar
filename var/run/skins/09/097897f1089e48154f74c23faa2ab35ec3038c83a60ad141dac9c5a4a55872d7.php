<?php

/* /var/www/html/lostcar/skins/customer/shopping_cart/shipping_estimator/parts/main.address.twig */
class __TwigTemplate_10d004e47547f05c87a09b24608548f83299b25dd348b61bbdb1959f95984fd5 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Cart\\ShippingEstimator\\Destination", array("className" => "estimator"));        // line 7
        echo "
  <ul class=\"form\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "shippingEstimator.address"))), "html", null, true);
        echo "
  </ul>

  ";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEstimate", array(), "method")) {
            // line 13
            echo "    <div class=\"buttons\">
      ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Apply destination"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEstimate", array(), "method")) {
            // line 19
            echo "    <div class=\"buttons main\">
      ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Apply destination"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 23
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/shopping_cart/shipping_estimator/parts/main.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  49 => 20,  46 => 19,  44 => 18,  41 => 17,  35 => 14,  32 => 13,  30 => 12,  24 => 9,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping estimator : address*/
/*  #*/
/*  # @ListChild (list="shippingEstimator.main", weight="10")*/
/*  #}*/
/* {% form '\\XLite\\View\\Form\\Cart\\ShippingEstimator\\Destination' with {className: 'estimator'} %}*/
/* */
/*   <ul class="form">*/
/*     {{ widget_list('shippingEstimator.address') }}*/
/*   </ul>*/
/* */
/*   {% if this.isEstimate() %}*/
/*     <div class="buttons">*/
/*       {{ widget('\\XLite\\View\\Button\\Submit', label='Apply destination') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if not this.isEstimate() %}*/
/*     <div class="buttons main">*/
/*       {{ widget('\\XLite\\View\\Button\\Submit', label='Apply destination') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* {% endform %}*/
/* */
