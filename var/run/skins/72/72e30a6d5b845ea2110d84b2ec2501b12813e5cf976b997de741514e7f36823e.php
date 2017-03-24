<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/common.product-sku.twig */
class __TwigTemplate_10ed79d3bb282c317bcbc2e7bbda0b41725122013a7cd7fde2841e21fd563e6f extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"product-sku\">";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "sku", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "sku", array()), "html", null, true);
        } else {
            echo "&nbsp;";
        }
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/common.product-sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Item SKU*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="10")*/
/*  #}*/
/* <span class="product-sku">{% if this.product.sku %}{{ this.product.sku }}{% else %}&nbsp;{% endif %}</span>*/
/* */
