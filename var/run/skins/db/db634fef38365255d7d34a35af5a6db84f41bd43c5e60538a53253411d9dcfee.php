<?php

/* product/details/page/body.twig */
class __TwigTemplate_674f182c7120409da2d4a4b3735f86a4bcde40510bdf0d7f9e56e395be20257b extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 5
        $this->startForm("\\XLite\\View\\Form\\Product\\AddToCart", array("product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "className" => "product-details", "validationEngine" => "1"));        // line 6
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page"))), "html", null, true);
        echo "
  ";
        $this->endForm();        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/page/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  25 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product details*/
/*  #}*/
/* <div {{ this.printTagAttributes(this.getContainerAttributes())|raw }}>*/
/*   {% form '\\XLite\\View\\Form\\Product\\AddToCart' with {product: this.product, className: 'product-details', validationEngine: '1'} %}*/
/*     {{ widget_list('product.details.page') }}*/
/*   {% endform %}*/
/* </div>*/
/* */
