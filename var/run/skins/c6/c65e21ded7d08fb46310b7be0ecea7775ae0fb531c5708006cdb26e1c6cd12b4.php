<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/MailChimp/model/profile/subscriptions_list.twig */
class __TwigTemplate_a5c954d3d14c9165636c22b1d520c8604a76df5ba1a8408cb454b22cc4073135 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\MailChimp\\View\\ItemsList\\Subscriptions\\RegisterSubscriptions", "profile" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfile", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/MailChimp/model/profile/subscriptions_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Register form template*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.placeOrder", weight="350")*/
/*  # @ListChild (list="checkout_fastlane.sections.place-order.before", weight="100")*/
/*  # @ListChild (list="checkout.review.selected.items", weight="2000")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\XC\\MailChimp\\View\\ItemsList\\Subscriptions\\RegisterSubscriptions', profile=this.getProfile()) }}*/
/* */
