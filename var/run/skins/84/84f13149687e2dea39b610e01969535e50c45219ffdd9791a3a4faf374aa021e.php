<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/price.twig */
class __TwigTemplate_7634b60d6ca9f0a9af9bd66952379f1e2956edda5395471d84a0a84573328ffa extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price")), "sortByColumn" => twig_constant("SORT_BY_MODE_PRICE", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/price.twig";
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
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="60")*/
/*  #}*/
/* */
/* <th class="price">{{ widget(template='items_list/sort.twig', title=t('Price'), sortByColumn=constant('SORT_BY_MODE_PRICE', this)) }}</th>*/
/* */
