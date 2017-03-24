<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Coupons/item.freeship.twig */
class __TwigTemplate_5d4388220d7e77a76e51946ff3720a242deccc5197d4e246fb5c462cb7760264 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isFreeShipping", array(), "method")) {
            // line 8
            echo "  <p class=\"item-freeship\">
  ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("FREE SHIPPING")), "html", null, true);
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Coupons/item.freeship.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : main*/
/*  #*/
/*  # @ListChild (list="cart.item.info", weight="1000")*/
/*  #}*/
/* */
/* {% if this.item.isFreeShipping() %}*/
/*   <p class="item-freeship">*/
/*   {{ t('FREE SHIPPING') }}*/
/*   </p>*/
/* {% endif %}*/
/* */
