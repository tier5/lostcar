<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/shopping_cart/parts/button.continue.twig */
class __TwigTemplate_c0483a3148c9ef493b0639dc96f5bf15d6d85897f6e4cbf9efdbc788b57e02a5 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\ContinueShopping"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/shopping_cart/parts/button.continue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Clear bag button*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="10")*/
/*  # @ListChild (list="cart.children", weight="10")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\ContinueShopping') }}*/
/* */
