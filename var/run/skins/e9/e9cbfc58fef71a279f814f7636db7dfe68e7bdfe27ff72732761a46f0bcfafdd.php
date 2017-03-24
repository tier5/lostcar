<?php

/* /var/www/html/lostcar/skins/customer/shopping_cart/parts/panel.totals.twig */
class __TwigTemplate_27d674c76efb2ea02bf171441bbcf22926740d586bc11846a7e450e86bf550e9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"totals\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.panel.totals"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/shopping_cart/parts/panel.totals.twig";
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
/*  # Shopping cart totals panel*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="10")*/
/*  #}*/
/* <ul class="totals">*/
/*   {{ widget_list('cart.panel.totals') }}*/
/* </ul>*/
/* */
