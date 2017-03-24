<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.item.twig */
class __TwigTemplate_4a9959338932ffe74622f1f5121883d981ce06845aced8c13f0ed7bed6387142 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"item\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Item list")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.item.twig";
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
/*  # Invoice items table head part : SKU column*/
/*  #*/
/*  # @ListChild (list="invoice.items.head", weight="10")*/
/*  #}*/
/* <th class="item">{{ t('Item list') }}</th>*/
/* */
