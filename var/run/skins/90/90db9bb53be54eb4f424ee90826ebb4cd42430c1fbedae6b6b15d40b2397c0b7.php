<?php

/* /var/www/html/lostcar/skins/admin/modules/QSL/SpecialOffersBase/special_offers/create/type.twig */
class __TwigTemplate_cf4085e264b9e8f111f6a5530cbf42790ead716c2a6f34b7b36c4a7a7601ff9a extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<li class=\"create-param param-offer-type\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\QSL\\SpecialOffersBase\\View\\FormField\\Select\\OfferType", "fieldName" => "type_id", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("New offer:"))))), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/QSL/SpecialOffersBase/special_offers/create/type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # @ListChild (list="qsl.specialoffersbase.special_offers.list.create", weight="100")*/
/*  #}*/
/* */
/* <li class="create-param param-offer-type">*/
/*   {{ widget('XLite\\Module\\QSL\\SpecialOffersBase\\View\\FormField\\Select\\OfferType', fieldName='type_id', label=t('New offer:')) }}*/
/* </li>*/
