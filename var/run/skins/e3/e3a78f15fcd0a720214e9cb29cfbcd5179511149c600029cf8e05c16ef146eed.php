<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/common.button-add2cart.twig */
class __TwigTemplate_2399d74629d1e38308ac503d09969cbfff37eb96c2ccc1501655e57a0e5ff178 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowAdd2CartBlock", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdd2CartBlockWidget", array(), "method"))) {
            // line 8
            echo "    ";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdd2CartBlockWidget", array(), "method"), "display", array(), "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/common.button-add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Item buttons*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="50")*/
/*  #}*/
/* */
/* {% if this.isShowAdd2CartBlock() and this.getAdd2CartBlockWidget() %}*/
/*     {{ this.getAdd2CartBlockWidget().display()|raw }}*/
/* {% endif %}*/
/* */
