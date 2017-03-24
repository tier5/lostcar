<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/category.twig */
class __TwigTemplate_0e7814edb66331c1db35a19a26726a96ccfef804d3ce2ea1097ce5b20c557ee2 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"category\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Category")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/category.twig";
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
/*  # @ListChild (list="itemsList.product.admin.featured.header", weight="40")*/
/*  #}*/
/* */
/* <th class="category">{{ t('Category') }}</th>*/
/* */
