<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/name.twig */
class __TwigTemplate_fbc03d9bdf877a1607a5af9fdbc7d182e04302e873d8c29aae8bf072181b9750 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"name\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => "Name", "sortByColumn" => twig_constant("SORT_BY_MODE_NAME", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/name.twig";
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
/*  # Item name*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="30")*/
/*  #}*/
/* */
/* <th class="name">{{ widget(template='items_list/sort.twig', title='Name', sortByColumn=constant('SORT_BY_MODE_NAME', this)) }}</th>*/
/* */
