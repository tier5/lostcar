<?php

/* /var/www/html/lostcar/skins/customer/product/search/parts/advanced.options.twig */
class __TwigTemplate_cb76453faa53d85f4262e52200203d7ce82afb3a815f344bff1cf3a3bdfc7580 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"option-name title-search-by-options\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search in")), "html", null, true);
        echo ":</td>
  <td>
    <ul class=\"search-by-options\">
      ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "products.search.conditions.advanced.options"))), "html", null, true);
        echo "
    </ul>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/search/parts/advanced.options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Search in*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="option-name title-search-by-options">{{ t('Search in') }}:</td>*/
/*   <td>*/
/*     <ul class="search-by-options">*/
/*       {{ widget_list('products.search.conditions.advanced.options') }}*/
/*     </ul>*/
/*   </td>*/
/* </tr>*/
/* */
