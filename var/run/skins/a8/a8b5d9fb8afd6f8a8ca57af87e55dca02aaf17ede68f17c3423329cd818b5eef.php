<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Sale/details/you_save.twig */
class __TwigTemplate_05cea476086530022c808f201b82515f2c78ad808584bc2ff2bd2aab23945047 extends \XLite\Core\Templating\Twig\Template
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
, ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("you save")), "html", null, true);
        echo " <span class=\"you-save\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSalePriceDifference", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "null", array()), 2 => 1), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Sale/details/you_save.twig";
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
/*  # "You save" label (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail.sale_price.text", weight="200")*/
/*  #}*/
/* */
/* , {{ t('you save') }} <span class="you-save">{{ this.formatPrice(this.getSalePriceDifference(), this.null, 1) }}</span>*/
/* */
