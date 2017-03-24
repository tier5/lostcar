<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/common.product-editable-attributes.twig */
class __TwigTemplate_ca02f25560d3c1c9909bdf0b21919b6b852f5f6b6051645bc8eacca9f8f2e5cd extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\EditableAttributes", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/common.product-editable-attributes.twig";
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
/*  # Product details 'Editable attributes' block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="55")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="55")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\EditableAttributes', product=this.product) }}*/
/* */
