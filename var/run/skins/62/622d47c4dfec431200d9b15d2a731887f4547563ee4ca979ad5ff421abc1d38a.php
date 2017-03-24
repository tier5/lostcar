<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig */
class __TwigTemplate_9cba605211f397fced09a9d403ff26a2348e556f753161bec39cfc53c16bb61f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAnonymous", array(), "method")) {
            // line 8
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig", "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig", 8)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping address : create profile checkbox*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.blocks.address.shipping.email", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAnonymous() %}*/
/*   {% include 'modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig' %}*/
/* {% endif %}*/
/* */
