<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/totals.twig */
class __TwigTemplate_c80312a75d687a2025043ec6a29c1bd7ef578b606f42adf592d161860c9e686f extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"totals simple-list\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.base.totals"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/page/parts/totals.twig";
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
/*  # Invoice totals*/
/*  #*/
/*  # @ListChild (list="order.items.bottom", weight="100")*/
/*  #}*/
/* <ul class="totals simple-list">*/
/*   {{ widget_list('order.base.totals') }}*/
/* </ul>*/
/* */
