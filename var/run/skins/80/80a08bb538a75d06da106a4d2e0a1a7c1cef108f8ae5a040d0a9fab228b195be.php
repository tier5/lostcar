<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.sku.twig */
class __TwigTemplate_6d0a57c8be706501b0368f9e12d6a6a0a6e81caf26766cfc3c62f0d9252af947 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"product-sku\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSku", array(), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.sku.twig";
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
/*  # Create return :: form :: products :: column :: SKU*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.columns", weight="10")*/
/*  #}*/
/* */
/* <span class="product-sku">{{ this.item.getSku() }}</span>*/
/* */
