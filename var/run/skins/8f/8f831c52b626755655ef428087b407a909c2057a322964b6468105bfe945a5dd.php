<?php

/* /var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/items.head.qty_ship.twig */
class __TwigTemplate_950b699766239542e3094a35ed18ada2fdcf1964fdea56c3c3dabc1a1bdbcc9c extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"qty-ship\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Ship QTY")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/items.head.qty_ship.twig";
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
/*  # @ListChild (list="packing_slip.items.head", weight="40")*/
/*  #}*/
/* <th class="qty-ship">{{ t('Ship QTY') }}</th>*/
/* */
