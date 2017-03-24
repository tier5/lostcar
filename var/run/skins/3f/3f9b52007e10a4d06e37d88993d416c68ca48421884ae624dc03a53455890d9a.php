<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/common.price.twig */
class __TwigTemplate_3af62929ad26d4049efc3ab0f1ed8447ff62f4f186e5185c509da58c2095a608 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Price", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/common.price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 7,);
    }
}
/* {##*/
/*  # Product price*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="40")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="40")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Price', product=this.product) }}*/
/* */
