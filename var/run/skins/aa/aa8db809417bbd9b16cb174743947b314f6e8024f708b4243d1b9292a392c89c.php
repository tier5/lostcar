<?php

/* product/details/editable_attributes/body.twig */
class __TwigTemplate_28e0b541f95f8d9017bc81f83eb9f9f88bdf2ce07db6b79b1672cc5fd6caea3b extends \XLite\Core\Templating\Twig\Template
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
            echo "  <div class=\"editable-attributes ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFingerprint", array(), "method"), "html", null, true);
            echo "\">
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\AttributesModify", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProduct", array(), "method"), "attribute_values" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributeValues", array(), "method")))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/editable_attributes/body.twig";
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
/*   <div class="editable-attributes {{ this.getFingerprint() }}">*/
/*     {{ widget('\\XLite\\View\\Product\\Details\\Customer\\AttributesModify', product=this.getProduct(), attribute_values=this.getAttributeValues()) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
