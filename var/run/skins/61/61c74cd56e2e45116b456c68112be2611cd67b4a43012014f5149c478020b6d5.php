<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/XPaymentsConnector/account/saved_cards.header.twig */
class __TwigTemplate_4eddeec5c9c0c9953165366b1fc4be424c9fee705aac3427702ed9b950cbffdf extends \XLite\Core\Templating\Twig\Template
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
<p class=\"saved-cards-description\">  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Cards which can be used for your future orders in this shop. No real credit cards were saved, only special token on the side of the payment processor, that can be used in this store only.")), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/XPaymentsConnector/account/saved_cards.header.twig";
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
/*  # Customer's saved credit cards header */
/*  #*/
/*  #*/
/*  # @ListChild (list="customer.account.saved_cards.before", weight="100")*/
/*  # @ListChild (list="customer.account.add_new_card.before", weight="100")*/
/*  #}*/
/* */
/* <p class="saved-cards-description">  {{ t('Cards which can be used for your future orders in this shop. No real credit cards were saved, only special token on the side of the payment processor, that can be used in this store only.') }}*/
/* </p>*/
/* */
