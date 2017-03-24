<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/position.twig */
class __TwigTemplate_f5ffec0fcc1d9cb63358f31f12e9bb432d5b660cb5c71519c3ffb0467a2aa7b9 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"pos\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Pos.")), "sortByColumn" => ""))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/position.twig";
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
/*  # Item position*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="50")*/
/*  #}*/
/* */
/* <th class="pos">{{ widget(template='items_list/sort.twig', title=t('Pos.'), sortByColumn='') }}</th>*/
/* */
