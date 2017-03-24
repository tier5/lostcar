<?php

/* /var/www/html/lostcar/skins/customer/product/quantity_box/parts/quantity_box.twig */
class __TwigTemplate_1b6c16642422797ef304b864e8eb96cbaec3591eb9271fce5b9ee707920833e8 extends \XLite\Core\Templating\Twig\Template
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
<input
  type=\"text\"
  value=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxValue", array(), "method"), "html", null, true);
        echo "\"
  class=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\"
  id=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxId", array(), "method"), "html", null, true);
        echo "\"
  name=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxName", array(), "method"), "html", null, true);
        echo "\"
  title=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxTitle", array(), "method"))), "html", null, true);
        echo "\" />
<span class=\"wheel-mark\">&nbsp;</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/quantity_box/parts/quantity_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  36 => 12,  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Main element (input)*/
/*  #*/
/*  # @ListChild (list="product.quantity-box", weight="20")*/
/*  #}*/
/* */
/* <input*/
/*   type="text"*/
/*   value="{{ this.getBoxValue() }}"*/
/*   class="{{ this.getClass() }}"*/
/*   id="{{ this.getBoxId() }}"*/
/*   name="{{ this.getBoxName() }}"*/
/*   title="{{ t(this.getBoxTitle()) }}" />*/
/* <span class="wheel-mark">&nbsp;</span>*/
/* */
