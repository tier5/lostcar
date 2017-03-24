<?php

/* /var/www/html/lostcar/skins/customer/checkout/success/parts/buttons.twig */
class __TwigTemplate_a1283d4294cb3e27c055848fa8c7e04c9a925f81f04cf7aef37133e9babe18aa extends \XLite\Core\Templating\Twig\Template
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
<div class=\"buttons-row\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.success.panel.buttons"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/success/parts/buttons.twig";
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
/*  # Buttons*/
/*  #*/
/*  # @ListChild (list="checkout.success.panel", weight="200")*/
/*  #}*/
/* */
/* <div class="buttons-row">*/
/*   {{ widget_list('checkout.success.panel.buttons') }}*/
/* </div>*/
/* */
