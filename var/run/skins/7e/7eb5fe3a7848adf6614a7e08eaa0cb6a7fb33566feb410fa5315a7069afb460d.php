<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/Sale/product/sale_label.twig */
class __TwigTemplate_dca7166b30494d588dbe1a22646f3bb3f4d4d70288252caa87bb6ea9f25ec959 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<span
  id=\"product-sale-label-";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getProductId", array(), "method"), "html", null, true);
        echo "\"
  class=\"product-name-sale-label";
        // line 10
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "participateSaleAdmin", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            echo " product-name-sale-label-disabled";
        }
        echo "\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("sale")), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/Sale/product/sale_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  27 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="itemsList.products.search.cell.name", weight="10")*/
/*  # @ListChild (list="itemsList.product_selector.cell.name", weight="10")*/
/*  #}*/
/* */
/* <span*/
/*   id="product-sale-label-{{ this.entity.getProductId() }}"*/
/*   class="product-name-sale-label{% if not this.participateSaleAdmin(this.entity) %} product-name-sale-label-disabled{% endif %}">*/
/*   {{ t('sale') }}*/
/* </span>*/
/* */
