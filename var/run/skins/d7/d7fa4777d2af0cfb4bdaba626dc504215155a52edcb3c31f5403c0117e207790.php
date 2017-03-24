<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/modify/common/parts/header/price.twig */
class __TwigTemplate_94f10e96438bdbb03f00479a21f0131a9cb7b224be1d162b56cf5a92fb4e72f5 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"price\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => (((call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price")) . " <span class=\"currency\">(") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "xlite", array()), "currency", array()), "getCurrencySymbol", array(), "method")) . ")</span>"), "sortByColumn" => twig_constant("SORT_BY_MODE_PRICE", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/modify/common/parts/header/price.twig";
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
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.modify.common.admin.header", weight="60")*/
/*  #}*/
/* */
/* <th class="price">{{ widget(template='items_list/sort.twig', title=t('Price') ~ ' <span class="currency">(' ~ this.xlite.currency.getCurrencySymbol() ~ ')</span>', sortByColumn=constant('SORT_BY_MODE_PRICE', this)) }}</th>*/
/* */
