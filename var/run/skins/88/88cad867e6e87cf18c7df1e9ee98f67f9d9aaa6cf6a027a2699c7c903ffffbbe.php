<?php

/* product/quantity/body.twig */
class __TwigTemplate_4434ae7b295dac55f0638087223f83941f50bee7d49ed71623510f52caa50b84 extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCSSClass", array(), "method"), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        if (( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOutOfStock", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isProductAvailableForSale", array(), "method"))) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Qty")), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\QuantityBox", "fieldValue" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getQuantity", array(), "method"), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProduct", array(), "method"), "maxValue" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxQuantity", array(), "method")))), "html", null, true);
            echo "
  ";
        }
        // line 8
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "product/quantity/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  28 => 6,  26 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product quantity widget (for customer area)*/
/*  #}*/
/* <span class="{{ this.getCSSClass() }} {{ this.getFingerprint() }}">*/
/*   {% if not this.isOutOfStock() and this.isProductAvailableForSale() %}*/
/*     {{ t('Qty') }}: {{ widget('\\XLite\\View\\Product\\QuantityBox', fieldValue=this.getQuantity(), product=this.getProduct(), maxValue=this.getMaxQuantity()) }}*/
/*   {% endif %}*/
/* </span>*/
/* */
