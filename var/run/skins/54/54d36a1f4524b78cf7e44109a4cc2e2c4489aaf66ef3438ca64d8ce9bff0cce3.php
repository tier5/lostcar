<?php

/* /var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/items.head.name.twig */
class __TwigTemplate_106ce0a8cd418a6d90a1f30adc9d619f8a8629c8b375f23e7bec3db5e4255d98 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Product")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/items.head.name.twig";
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
/*  # Invoice items table head part : Name column*/
/*  #*/
/*  # @ListChild (list="packing_slip.items.head", weight="20")*/
/*  #}*/
/* <th class="item">{{ t('Product') }}</th>*/
/* */
