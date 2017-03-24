<?php

/* /var/www/html/lostcar/skins/customer/checkout/steps/review/parts/place_order.agree_note.twig */
class __TwigTemplate_1219f44844653d6248364646532e52e28f1c1574d2b02d848a412d620084b221 extends \XLite\Core\Templating\Twig\Template
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
<p class=\"agree-note\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Clicking the Place order button you accept: Terms and Conditions", array("URL" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTermsURL", array(), "method"))));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/steps/review/parts/place_order.agree_note.twig";
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
/*  # Checkout : order review step : selected state : place order : agree note*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.placeOrder", weight="500")*/
/*  #}*/
/* */
/* <p class="agree-note">{{ t('Clicking the Place order button you accept: Terms and Conditions', {'URL': this.getTermsURL()})|raw }}</p>*/
/* */
