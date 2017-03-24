<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/signin/signin_anonymous_box.twig */
class __TwigTemplate_d32910c66dbef066a104c6165987ff045d6102d86e1ff961313b982d7c5694fe extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\View\\Form\\Checkout\\ContinueAsGuest");        // line 7
        echo "
<table class=\"continue-as-guest-form\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "signin-anonymous-title.continue"))), "html", null, true);
        echo "
</table>

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/signin/signin_anonymous_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title", weight="200")*/
/*  #}*/
/* {% form 'XLite\\View\\Form\\Checkout\\ContinueAsGuest' %}*/
/* */
/* <table class="continue-as-guest-form">*/
/*   {{ widget_list('signin-anonymous-title.continue') }}*/
/* </table>*/
/* */
/* {% endform %}*/
