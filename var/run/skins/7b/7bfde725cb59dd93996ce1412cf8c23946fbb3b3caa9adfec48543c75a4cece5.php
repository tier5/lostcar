<?php

/* /var/www/html/lostcar/skins/customer/product/details/common_attributes/common.product-attributes.weight.twig */
class __TwigTemplate_74daff6791ae0daf8d7fa6b35b34466eafb9128ac0848b9689c6b3031c46bec1 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWeight", array(), "method") != 0)) {
            // line 7
            echo "  <li class=\"product-weight\">
    <div><strong>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Weight")), "html", null, true);
            echo "</strong></div>
    <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatWeight", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWeight", array(), "method")), "method"), "html", null, true);
            echo "</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/common_attributes/common.product-attributes.weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details Weight main block*/
/*  #*/
/*  # @ListChild (list="product.details.common.product-attributes.elements", weight="100")*/
/*  #}*/
/* {% if this.getWeight() != 0 %}*/
/*   <li class="product-weight">*/
/*     <div><strong>{{ t('Weight') }}</strong></div>*/
/*     <span>{{ this.formatWeight(this.getWeight()) }}</span>*/
/*   </li>*/
/* {% endif %}*/
/* */
