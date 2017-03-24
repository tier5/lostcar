<?php

/* product/details/stock/body.twig */
class __TwigTemplate_efaaf0463d541fdf587cf897ce734786c4f3acf3fbcf0eb640ce09cfeaf16d0b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-stock ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInStock", array(), "method")) {
            // line 7
            echo "    <span class=\"stock-level product-in-stock\">
      <span class=\"in-stock-label\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("In stock")), "html", null, true);
            echo "</span>
      ";
            // line 9
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowStockWarning", array(), "method")) {
                // line 10
                echo "        <span class=\"product-items-available low-stock\">(";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Only X left in stock", array("X" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAvailableAmount", array(), "method")))), "html", null, true);
                echo ")</span>
      ";
            } else {
                // line 12
                echo "        <span class=\"product-items-available\">(";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X items available", array("count" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAvailableAmount", array(), "method")))), "html", null, true);
                echo ")</span>
      ";
            }
            // line 14
            echo "    </span>
  ";
        } else {
            // line 16
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOutOfStock", array(), "method")) {
                // line 17
                echo "      <span class=\"stock-level product-out-of-stock\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOutOfStockMessage", array(), "method"), "html", null, true);
                echo "</span>
    ";
            }
            // line 19
            echo "  ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/stock/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  56 => 17,  53 => 16,  49 => 14,  43 => 12,  37 => 10,  35 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product stock*/
/*  #}*/
/* */
/* <div class="product-stock {{ this.getFingerprint() }}">*/
/*   {% if this.isInStock() %}*/
/*     <span class="stock-level product-in-stock">*/
/*       <span class="in-stock-label">{{ t('In stock') }}</span>*/
/*       {% if this.isShowStockWarning() %}*/
/*         <span class="product-items-available low-stock">({{ t('Only X left in stock', {'X': this.getAvailableAmount()}) }})</span>*/
/*       {% else %}*/
/*         <span class="product-items-available">({{ t('X items available', {'count': this.getAvailableAmount()}) }})</span>*/
/*       {% endif %}*/
/*     </span>*/
/*   {% else %}*/
/*     {% if this.isOutOfStock() %}*/
/*       <span class="stock-level product-out-of-stock">{{ this.getOutOfStockMessage() }}</span>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </div>*/
/* */
