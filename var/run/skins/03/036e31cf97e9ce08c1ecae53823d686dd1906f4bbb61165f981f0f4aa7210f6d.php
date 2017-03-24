<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/account/saved_cards.header.twig */
class __TwigTemplate_7d00f03bb45de25e63457e6621e0c3c289d48683cfb333a94de69ad7b3aecf4f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"alert alert-info\" role=\"alert\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Cards saved by the customer for the future orders in this shop. No real credit cards were saved, only special token on the side of the payment processor, that can be used in this store only.")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/XPaymentsConnector/account/saved_cards.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Customer's saved credit cards header */
/*  #*/
/*  #*/
/*  # @ListChild (list="admin.account.saved_cards.before", weight="100")*/
/*  #}*/
/* */
/* <div class="alert alert-info" role="alert">*/
/*   {{ t('Cards saved by the customer for the future orders in this shop. No real credit cards were saved, only special token on the side of the payment processor, that can be used in this store only.') }}*/
/* </div>*/
/* */
