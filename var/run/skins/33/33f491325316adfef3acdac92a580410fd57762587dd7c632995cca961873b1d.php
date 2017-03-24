<?php

/* form_field/inline/input/text/price.twig */
class __TwigTemplate_e0a480184c56f5f2f9ba84f16f82645a2c68e5ab8d4e3b06d0a1b885bde74036 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currency", array()), "getPrefix", array(), "method")) {
            // line 6
            echo "  <span class=\"symbol";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSymbolVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "singleField", array())), "method")) {
                echo " hidden";
            }
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currency", array()), "getPrefix", array(), "method");
            echo "</span>
";
        }
        // line 8
        echo "<span class=\"value\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "singleField", array())), "method");
        echo "</span>
";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currency", array()), "getSuffix", array(), "method")) {
            // line 10
            echo "  <span class=\"symbol ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSymbolVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "singleField", array())), "method")) {
                echo " hidden";
            }
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currency", array()), "getSuffix", array(), "method");
            echo "</span>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "form_field/inline/input/text/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  41 => 10,  39 => 9,  34 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Price inline view*/
/*  #}*/
/* */
/* {% if this.currency.getPrefix() %}*/
/*   <span class="symbol{% if not this.isSymbolVisible(this.singleField) %} hidden{% endif %}">{{ this.currency.getPrefix()|raw }}</span>*/
/* {% endif %}*/
/* <span class="value">{{ this.getViewValue(this.singleField)|raw }}</span>*/
/* {% if this.currency.getSuffix() %}*/
/*   <span class="symbol {% if not this.isSymbolVisible(this.singleField) %} hidden{% endif %}">{{ this.currency.getSuffix()|raw }}</span>*/
/* {% endif %}*/
/* */
/* */
