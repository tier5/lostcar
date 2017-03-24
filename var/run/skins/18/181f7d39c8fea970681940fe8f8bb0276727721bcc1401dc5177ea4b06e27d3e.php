<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/common.product-link.twig */
class __TwigTemplate_88f0495eef36f6b8a8e6985ed53f79fe3b9c338728de68e83a02f7f038b38ed4 extends \XLite\Core\Templating\Twig\Template
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
<a 
  href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\"
  class=\"product-link\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "html", null, true);
        echo "
</a>
";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isShowStockWarning", array(), "method")) {
            // line 13
            echo "  <span class=\"product-items-available low-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Only X left in stock", array("X" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAvailableAmount", array(), "method")))), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/common.product-link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  33 => 12,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Product link*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="20")*/
/*  #}*/
/* */
/* <a */
/*   href="{{ this.getProductURL(this.categoryId) }}"*/
/*   class="product-link">*/
/*   {{ this.product.name }}*/
/* </a>*/
/* {% if this.product.isShowStockWarning() %}*/
/*   <span class="product-items-available low-stock">{{ t('Only X left in stock', {'X': this.product.getAvailableAmount()}) }}</span>*/
/* {% endif %}*/
/* */
