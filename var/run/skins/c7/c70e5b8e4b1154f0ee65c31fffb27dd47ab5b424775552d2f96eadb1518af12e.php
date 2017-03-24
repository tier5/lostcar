<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/details/order_total.twig */
class __TwigTemplate_6184d47fc6ef24e1b3ecda1fcc28c92e546f8b9300b4634df6f735c33aac6ae6 extends \XLite\Core\Templating\Twig\Template
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
<order-total inline-template>
    <div class=\"order-total\" v-text='total_text'></div>
</order-total>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/details/order_total.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details.right", weight="19")*/
/*  #}*/
/* */
/* <order-total inline-template>*/
/*     <div class="order-total" v-text='total_text'></div>*/
/* </order-total>*/
