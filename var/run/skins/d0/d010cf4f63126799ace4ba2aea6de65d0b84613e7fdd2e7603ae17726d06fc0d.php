<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/inventory.twig */
class __TwigTemplate_028f08d7ffb38cc49fafea81be845a0f11e55d875f6a5523f36cf2e18db8bace extends \XLite\Core\Templating\Twig\Template
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
<th class=\"inventory\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Amount")), "sortByColumn" => twig_constant("SORT_BY_MODE_AMOUNT", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/inventory.twig";
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
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="70")*/
/*  #}*/
/* */
/* <th class="inventory">{{ widget(template='items_list/sort.twig', title=t('Amount'), sortByColumn=constant('SORT_BY_MODE_AMOUNT', this)) }}</th>*/
/* */
