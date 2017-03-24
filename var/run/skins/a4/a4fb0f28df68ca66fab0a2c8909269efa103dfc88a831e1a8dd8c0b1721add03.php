<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/columns/category.twig */
class __TwigTemplate_7a195708c9ec458e1ed364a4b5d55580d89d88787740a4b67cbffea73abe0904 extends \XLite\Core\Templating\Twig\Template
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
<td><a class=\"category\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "category", "", array("category_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "category", array()), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "category", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/columns/category.twig";
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
/*  # Item category*/
/*  #*/
/*  # @ListChild (list="itemsList.product.admin.featured.columns", weight="40")*/
/*  #}*/
/* */
/* <td><a class="category" href="{{ url('category', '', {'category_id': this.product.category.getCategoryId()}) }}">{{ this.product.category.getName() }}</a></td>*/
/* */
