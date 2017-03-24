<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/ProductAdvisor/parts/info.twig */
class __TwigTemplate_7b3c979461be8d5cc89612e5b3aa637678afba8e9c2204c3a0c8d7f5d1817aef extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "<div class=\"product-photo\">
  <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(), "method"), "html", null, true);
        echo "\"
     class=\"product-thumbnail lazy-load\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconAlt", array(), "method"), "className" => "photo"))), "html", null, true);
        echo "
  </a>
</div>

<div class=\"recently-viewed-product-details hidden\">
  <h5><a href=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></h5>
  <div class=\"price\">
    ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Price", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "displayOnlyPrice" => "1"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/ProductAdvisor/parts/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  35 => 13,  27 => 8,  22 => 6,  19 => 5,);
    }
}
/* {##*/
/*  # Products list item*/
/*  # @ListChild (list="itemsList.product.grid.customer.recently.info", weight="100")*/
/*  #}*/
/* <div class="product-photo">*/
/*   <a href="{{ this.getProductURL() }}"*/
/*      class="product-thumbnail lazy-load">*/
/*     {{ widget('\\XLite\\View\\Image', image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.getIconAlt(), className='photo') }}*/
/*   </a>*/
/* </div>*/
/* */
/* <div class="recently-viewed-product-details hidden">*/
/*   <h5><a href="{{ this.getProductURL() }}">{{ this.product.getName() }}</a></h5>*/
/*   <div class="price">*/
/*     {{ widget('\\XLite\\View\\Price', product=this.product, displayOnlyPrice='1') }}*/
/*   </div>*/
/* </div>*/
/* */
