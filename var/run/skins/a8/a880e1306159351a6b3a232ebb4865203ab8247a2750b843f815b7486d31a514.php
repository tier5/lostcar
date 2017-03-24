<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.total.twig */
class __TwigTemplate_b9fbe37f63823d5b1f7c0c1df2f905c5e114f8817d3ada49a3309982e6338e4e extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"total\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/items.head.total.twig";
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
/*  # Invoice items table head part : Total column*/
/*  #*/
/*  # @ListChild (list="invoice.items.head", weight="40")*/
/*  #}*/
/* <th class="total">{{ t('Total') }}</th>*/
/* */
