<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/grid.button-add2cart-wrapper.twig */
class __TwigTemplate_3d458e93ebab3b3624bce107a85f7345d503b66d7d8c594fab60da5ef64fd99f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAdd2CartButton", array(), "method")) {
            // line 8
            echo "  <div class=\"add-to-cart-button\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/product/parts/common.button-add2cart.twig", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/grid.button-add2cart-wrapper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Add to Cart button template*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.tail", weight="600")*/
/*  #}*/
/* */
/* {% if this.isDisplayAdd2CartButton() %}*/
/*   <div class="add-to-cart-button">*/
/*     {{ widget(template='items_list/product/parts/common.button-add2cart.twig', product=this.product) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
