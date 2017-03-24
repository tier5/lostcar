<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/columns/checkbox.twig */
class __TwigTemplate_ea64def0e8635dd1e5bff742a3e707c7fed4e377922aac99ea2fe840d9b5f71f extends \XLite\Core\Templating\Twig\Template
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
<td><input type=\"checkbox\" class=\"checkbox ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "html", null, true);
        echo "\" value=\"1\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNameToDelete", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method")), "method"), "html", null, true);
        echo "\" /></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/columns/checkbox.twig";
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
/*  # Column with checkboxes*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.columns", weight="10")*/
/*  #}*/
/* */
/* <td><input type="checkbox" class="checkbox {{ this.product.getProductId() }}" value="1" name="{{ this.getNameToDelete(this.product.getProductId()) }}" /></td>*/
/* */
