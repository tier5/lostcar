<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/items/items.twig */
class __TwigTemplate_08007b0b878c46112eab8f2aae3140b0736b6699b9a18a3a8255a6a531bae1b7 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ItemsList\\Model\\OrderItem", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/items/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice items*/
/*  #*/
/*  # @ListChild (list="order.items.wrapper", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\ItemsList\\Model\\OrderItem', order=this.order) }}*/
/* */
