<?php

/* common/price_plain.twig */
class __TwigTemplate_5f4a7fe38bcf26596f41162b6d41a1c470d9f2f4e5c705d6ac581373bf2682c6 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"product-price ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
        echo "\">
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.plain_price.head"))), "html", null, true);
        echo "
  <ul class=\"product-price\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.plain_price"))), "html", null, true);
        echo "
  </ul>
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.plain_price.tail"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "common/price_plain.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  31 => 8,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Price widget*/
/*  #}*/
/* */
/* <div class="product-price {{ this.getFingerprint() }}">*/
/* {{ widget_list('product.plain_price.head') }}*/
/*   <ul class="product-price">*/
/*   {{ widget_list('product.plain_price') }}*/
/*   </ul>*/
/* {{ widget_list('product.plain_price.tail') }}*/
/* </div>*/
