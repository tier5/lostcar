<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/columns/name.twig */
class __TwigTemplate_089f10a468b711041fdc6c76beb75aee6b3d512f957ec2328387191ceb99bb56 extends \XLite\Core\Templating\Twig\Template
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
<td><a class=\"name\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method")))), "html", null, true);
        echo "\">";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getName", array(), "method")) {
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getName", array(), "method");
        } else {
            echo "N/A";
        }
        echo "</a></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/columns/name.twig";
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
/*  # @ListChild (list="itemsList.product.table.admin.search.columns", weight="30")*/
/*  #}*/
/* */
/* <td><a class="name" href="{{ url('product', '', {'product_id': this.product.getProductId()}) }}">{% if this.product.getName() %}{{ this.product.getName()|raw }}{% else %}N/A{% endif %}</a></td>*/
/* */
