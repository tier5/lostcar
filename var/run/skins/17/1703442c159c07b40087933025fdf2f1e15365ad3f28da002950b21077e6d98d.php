<?php

/* modules/CDev/Paypal/button/product/default/express_checkout.twig */
class __TwigTemplate_8de3bf74056c8d2ca5d0a688a16ddd98205d2066a2ab80cf4c6eb4afd6461a6b extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"button pp-button\">
  <button type=\"submit\" onclick=\"paypalExpressCheckout(this.form, true)\" class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getId", array(), "method")) {
            echo " id=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getId", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
    <img src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-medium.png\" alt=\"Check out with PayPal\" />
  </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/button/product/default/express_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Express checkout*/
/*  #}*/
/* <div class="button pp-button">*/
/*   <button type="submit" onclick="paypalExpressCheckout(this.form, true)" class="{{ this.getClass() }}"{% if this.getId() %} id="{{ this.getId() }}"{% endif %}>*/
/*     <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-medium.png" alt="Check out with PayPal" />*/
/*   </button>*/
/* </div>*/
/* */
