<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/shopping_cart/parts/button.continue.twig */
class __TwigTemplate_4bf21bd1e41580780cea8ab4344926e0e94d36e58a808207af1d80bf2cff66fb extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/shopping_cart/parts/button.continue.twig";
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
