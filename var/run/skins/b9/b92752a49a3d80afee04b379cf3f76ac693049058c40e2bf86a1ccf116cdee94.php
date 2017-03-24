<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.price.twig */
class __TwigTemplate_e93f0c28e3fb0a821a80ee5d8bcceb83399d7cc05719c2c1ac8d43f8f314d6c8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.price.twig";
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
/*  # Invoice items table head part : Price column*/
/*  #*/
/*  # @ListChild (list="invoice.items.head", weight="20")*/
/*  #}*/
/* <th class="price">{{ t('Price') }}</th>*/
/* */
