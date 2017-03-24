<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/items/items.head.name.twig */
class __TwigTemplate_ad6e4751ee37f9852e99593a0d5bf693148290b9c05f54bd6289de7e3cb3c756 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/admin/order/page/parts/items/items.head.name.twig";
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
/*  # @ListChild (list="order.items.head", weight="10")*/
/*  #}*/
/* <th class="item">{{ t('Item list') }}</th>*/
/* */
