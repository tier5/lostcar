<?php

/* modules/CDev/Paypal/product/details/express_checkout_widget.twig */
class __TwigTemplate_c6cacc803c42ee1f17b0ee04f608ff964417adf3e39a2c4cd7832ec973a6ad7f extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div class=\"button pp-button ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
        echo "\">
    ";
        // line 5
        if (( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOutOfStock", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isProductAvailableForSale", array(), "method"))) {
            // line 6
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\Product\\ExpressCheckout"))), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/product/details/express_checkout_widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  26 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Express checkout*/
/*  #}*/
/* <div class="button pp-button {{ this.getFingerprint() }}">*/
/*     {% if not this.isOutOfStock() and this.isProductAvailableForSale() %}*/
/*         {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Button\\Product\\ExpressCheckout') }}*/
/*     {% endif %}*/
/* </div>*/
