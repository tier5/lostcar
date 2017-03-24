<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/line3.twig */
class __TwigTemplate_e87f53e526aeb4f38f7dcc0ddf82a477c0e9d63af29a093ffe13c2577b3fceba extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOrderItemsVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"line-3\">
    <h2>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order items")), "html", null, true);
            echo "</h2>
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.items.wrapper"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/line3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order : line 3*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="300")*/
/*  #}*/
/* */
/* {% if this.isOrderItemsVisible() %}*/
/*   <div class="line-3">*/
/*     <h2>{{ t('Order items') }}</h2>*/
/*     {{ widget_list('order.items.wrapper') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
