<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig */
class __TwigTemplate_5822bc50207b24e1f5aec01b39c24555040e90e87083f946db137179f7178578 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"add_new_card_iframe_container\">

  <iframe data-src=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "add_new_card", 1 => "xpc_iframe"), "method"), "html", null, true);
        echo "\" width=\"300\" height=\"100%\" border=\"0\" style=\"border: 0px\" id=\"add_new_card_iframe\"></iframe>

  <div class=\"clearfix\"></div>

  <input type=\"button\" value=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save credit card")), "html", null, true);
        echo "\" id=\"submit-button\" class=\"btn regular-button regular-main-button submit add-new-card-button\" />

  <a href=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "saved_cards")), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to credit cards")), "html", null, true);
        echo "</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  31 => 14,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # Form for the add new card */
/*  #*/
/*  #*/
/*  # @ListChild (list="customer.account.add_new_card.form", weight="100")*/
/*  #}*/
/* */
/* <div id="add_new_card_iframe_container">*/
/* */
/*   <iframe data-src="{{ this.buildUrl('add_new_card', 'xpc_iframe') }}" width="300" height="100%" border="0" style="border: 0px" id="add_new_card_iframe"></iframe>*/
/* */
/*   <div class="clearfix"></div>*/
/* */
/*   <input type="button" value="{{ t('Save credit card') }}" id="submit-button" class="btn regular-button regular-main-button submit add-new-card-button" />*/
/* */
/*   <a href="{{ url('saved_cards') }}">{{ t('Back to credit cards') }}</a>*/
/* */
/* </div>*/
/* */
