<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/items_list/product/parts/price.container.twig */
class __TwigTemplate_3f7af8959007963934e34068f71940eac8a093fd793538c63075cd9caa8cc0e7 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-price-contaner\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.price.container"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/items_list/product/parts/price.container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Products list (list variant)*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="40")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="21")*/
/*  #}*/
/* */
/* <div class="product-price-contaner">*/
/*     {{ widget_list('product.price.container') }}*/
/* </div>*/
/* */
