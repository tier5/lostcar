<?php

/* /var/www/html/lostcar/skins/customer/shopping_cart/parts/item.info.out.twig */
class __TwigTemplate_ef47ef9e2c99547e9c1ec719c38254e2e1d21e403afbf3978caf9ee3a1b440ad extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isValidAmount", array(), "method")) {
            // line 7
            echo "  <p class=\"item-out-of-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Out of stock")), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/shopping_cart/parts/item.info.out.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item weight block*/
/*  #*/
/*  # @ListChild (list="cart.item.info", weight="100")*/
/*  #}*/
/* {% if not this.item.isValidAmount() %}*/
/*   <p class="item-out-of-stock">{{ t('Out of stock') }}</p>*/
/* {% endif %}*/
/* */
