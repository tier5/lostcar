<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header/back_button.twig */
class __TwigTemplate_c69085ec9b3ef490ee7bfd276fac57c6a32410409eda235a7017f482cf586ba9 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\SimpleLink", 1 => array("style" => "checkout_fastlane_back_button", "label" => "Return to cart", "location" => "cart.php?target=cart", "icon-style" => "fa fa-arrow-left")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header/back_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout heading bar*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.header.left", weight="20")*/
/*  #}*/
/* */
/* {{ widget(*/
/*   "XLite\\View\\Button\\SimpleLink",*/
/*   {*/
/*     'style':"checkout_fastlane_back_button",*/
/*     'label':"Return to cart",*/
/*     'location':"cart.php?target=cart",*/
/*     'icon-style': "fa fa-arrow-left"*/
/*   }*/
/* ) }}*/
