<?php

/* product/add_button/body.twig */
class __TwigTemplate_b38f20c33416bd2a406d73032b8fe28f98a82d2bc15e509b5245df48f5408724 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"add-button-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        if (( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOutOfStock", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isProductAvailableForSale", array(), "method"))) {
            // line 7
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Add to cart", "style" => "regular-main-button add2cart"))), "html", null, true);
            echo "
  ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "product/add_button/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Add to bag buttons*/
/*  #}*/
/* */
/* <div class="add-button-wrapper {{ this.getFingerprint() }}">*/
/*   {% if not this.isOutOfStock() and this.isProductAvailableForSale() %}*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', label='Add to cart', style='regular-main-button add2cart') }}*/
/*   {% endif %}*/
/* </div>*/
/* */
