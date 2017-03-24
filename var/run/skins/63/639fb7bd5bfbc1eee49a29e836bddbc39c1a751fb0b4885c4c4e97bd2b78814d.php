<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/table.captions.name.twig */
class __TwigTemplate_2f9127a1d678ee8799fe9df1b4d923941ce1836cf118fcb3bd7dad2815432ca5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"caption-product-name\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Product name")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/table.captions.name.twig";
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
/*  # Item name*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.captions", weight="20")*/
/*  #}*/
/* <th class="caption-product-name">{{ t('Product name') }}</th>*/
/* */
