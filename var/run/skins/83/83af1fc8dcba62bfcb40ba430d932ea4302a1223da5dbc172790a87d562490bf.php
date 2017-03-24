<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/price.twig */
class __TwigTemplate_f19b609168a66802613b397c84900852bfb9d16d96f2889b6db83277c205fa7a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"next-previous-price\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\NextPreviousProduct\\View\\Price", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "displayOnlyPrice" => "1"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/price.twig";
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
/*  # Next product links*/
/*  #*/
/*  # @ListChild (list="next_previous.product.body.dropdown", weight="300")*/
/*  #}*/
/* */
/* <div class="next-previous-price">*/
/*     {{ widget('\\XLite\\Module\\XC\\NextPreviousProduct\\View\\Price', product=this.item, displayOnlyPrice='1') }}*/
/* </div>*/
/* */
