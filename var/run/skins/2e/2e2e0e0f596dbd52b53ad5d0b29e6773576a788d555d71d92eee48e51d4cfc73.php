<?php

/* product/details/common_attributes/body.twig */
class __TwigTemplate_0a90c4c66418bf9f67ddb0347840d3137a8eb9204a972c767531b391abaec765 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasAttributes", array(), "method")) {
            // line 6
            echo "  <ul class=\"extra-fields ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
            echo "\">
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.common.product-attributes.elements"))), "html", null, true);
            echo "
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/common_attributes/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product details attributes block*/
/*  #}*/
/* */
/* {% if this.hasAttributes() %}*/
/*   <ul class="extra-fields {{ this.getFingerprint() }}">*/
/*     {{ widget_list('product.details.common.product-attributes.elements') }}*/
/*   </ul>*/
/* {% endif %}*/
/* */
