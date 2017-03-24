<?php

/* /var/www/html/lostcar/skins/customer/checkout/success/parts/panel.twig */
class __TwigTemplate_4de046a8082c15e8a431ffdbd94a8dbe05c96a41dd29ac580885866269ee56aa extends \XLite\Core\Templating\Twig\Template
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
<div class=\"order-success-panel\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.success.panel"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/success/parts/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Panel*/
/*  #*/
/*  # @ListChild (list="checkout.success", weight="100")*/
/*  #}*/
/* */
/* <div class="order-success-panel">*/
/*   {{ widget_list('checkout.success.panel') }}*/
/* </div>*/
/* */
