<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig */
class __TwigTemplate_389c37fc449427f4de1cc10db24960b10ca5842e3587872ab13f07f0f6ec6f44 extends \XLite\Core\Templating\Twig\Template
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


  <iframe src=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "add_new_card", 1 => "xpc_iframe", 2 => array("profile_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomerProfileId", array(), "method"))), "method"), "html", null, true);
        echo "\" width=\"300\" height=\"100%\" border=\"0\" style=\"border: 0px\" id=\"add_new_card_iframe\"></iframe>

  <div class=\"clearfix\"></div>

  <button id=\"submit-button\" class=\"btn regular-main-button\" />";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save credit card")), "html", null, true);
        echo "</button>

  <a href=\"";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "saved_cards", "", array("profile_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomerProfileId", array(), "method")))), "html", null, true);
        echo "\" class=\"back-to-cards\" >";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to credit cards")), "html", null, true);
        echo "</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  32 => 15,  25 => 11,  19 => 7,);
    }
}
/* {##*/
/*  # Customer's saved credit cards header*/
/*  #*/
/*  #*/
/*  # @ListChild (list="admin.account.add_new_card.form", weight="100")*/
/*  #}*/
/* */
/* <div id="add_new_card_iframe_container">*/
/* */
/* */
/*   <iframe src="{{ this.buildUrl('add_new_card', 'xpc_iframe', {'profile_id': this.getCustomerProfileId()}) }}" width="300" height="100%" border="0" style="border: 0px" id="add_new_card_iframe"></iframe>*/
/* */
/*   <div class="clearfix"></div>*/
/* */
/*   <button id="submit-button" class="btn regular-main-button" />{{ t('Save credit card') }}</button>*/
/* */
/*   <a href="{{ url('saved_cards', '', {'profile_id': this.getCustomerProfileId()}) }}" class="back-to-cards" >{{ t('Back to credit cards') }}</a>*/
/* */
/* </div>*/
/* */
