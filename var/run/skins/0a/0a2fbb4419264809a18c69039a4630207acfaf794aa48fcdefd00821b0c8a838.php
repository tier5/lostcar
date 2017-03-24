<?php

/* modules/CDev/ProductAdvisor/parts/info.twig */
class __TwigTemplate_2eb1bd5e4258e35aaf9dd4681eefff1e9e84c2d62d4d50bf9a915f95a849e352 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-photo\">
    <a
            href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(), "method"), "html", null, true);
        echo "\"
            class=\"product-thumbnail lazy-load\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconAlt", array(), "method"), "className" => "photo"))), "html", null, true);
        echo "
    </a>
</div>

<div class=\"recently-viewed-product-details\">
    <h5 class=\"product-name\"><a href=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></h5>
    <div class=\"reviews-container\">
        ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.recently.product"))), "html", null, true);
        echo "
    </div>
    <div class=\"price\">
        ";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Price", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "displayOnlyPrice" => "1"))), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/ProductAdvisor/parts/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  44 => 16,  37 => 14,  29 => 9,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Products list item*/
/*  #}*/
/* */
/* <div class="product-photo">*/
/*     <a*/
/*             href="{{ this.getProductURL() }}"*/
/*             class="product-thumbnail lazy-load">*/
/*         {{ widget('\\XLite\\View\\Image', image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.getIconAlt(), className='photo') }}*/
/*     </a>*/
/* </div>*/
/* */
/* <div class="recently-viewed-product-details">*/
/*     <h5 class="product-name"><a href="{{ this.getProductURL() }}">{{ this.product.getName() }}</a></h5>*/
/*     <div class="reviews-container">*/
/*         {{ widget_list('reviews.recently.product')}}*/
/*     </div>*/
/*     <div class="price">*/
/*         {{ widget('\\XLite\\View\\Price', product=this.product, displayOnlyPrice='1') }}*/
/*     </div>*/
/* </div>*/
/* */
