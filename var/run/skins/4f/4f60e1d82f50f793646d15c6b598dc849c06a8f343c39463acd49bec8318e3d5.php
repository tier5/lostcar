<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/address_book.twig */
class __TwigTemplate_a278dd109dd8a89a1c49144f37d0f75849c34c846b277aca5428fad298270a0c extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        $context["visibility"] = (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAddressButton", array(), "method")) ? ("") : ("hidden"));
        // line 9
        echo "
<div class=\"checkout_fastlane_block_address-book-button ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["visibility"]) ? $context["visibility"] : null), "html", null, true);
        echo "\" v-show=\"visible\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\AddressBook", "addressType" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShortAddressType", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Address book"))))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/address_book.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.blocks.address.billing.prepend", weight="10")*/
/*  # @ListChild (list="checkout_fastlane.blocks.address.shipping.prepend", weight="10")*/
/*  #}*/
/* */
/* {% set visibility = this.isDisplayAddressButton() ? '' : 'hidden' %}*/
/* */
/* <div class="checkout_fastlane_block_address-book-button {{ visibility }}" v-show="visible">*/
/*     {{ widget('XLite\\View\\Button\\AddressBook', addressType=this.getShortAddressType(), label=t('Address book')) }}*/
/* </div>*/
