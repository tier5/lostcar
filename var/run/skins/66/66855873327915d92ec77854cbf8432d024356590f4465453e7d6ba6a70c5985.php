<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.qty.twig */
class __TwigTemplate_fa4ce8b906507d8f47ba77bd95995941b7e8b742522ebb24d0b4fd2beb60fe7e extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"qty\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Qty")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.qty.twig";
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
/*  # Invoice items table head part : Quantity column*/
/*  #*/
/*  # @ListChild (list="invoice.items.head", weight="30")*/
/*  #}*/
/* <th class="qty">{{ t('Qty') }}</th>*/
/* */
