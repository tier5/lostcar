<?php

/* /var/www/html/lostcar/skins/admin/items_list/model/table/category/parts/info.subcategories.twig */
class __TwigTemplate_a87e77cbf46ac24af38bd506e8ab18f75d17315357ded482e9a6aa84e19b27f0 extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "categories", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\" class=\"count-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getSubcategoriesCount", array(), "method"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/model/table/category/parts/info.subcategories.twig";
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
/*  # Subcategories count link*/
/*  #*/
/*  # @ListChild (list="itemsList.category.cell.subcategories", weight="100")*/
/*  #}*/
/* */
/* <a href="{{ url('categories', '', {'id': this.entity.getCategoryId()}) }}" class="count-link">{{ this.entity.getSubcategoriesCount() }}</a>*/
/* */
