<?php

/* product/manage_attribute_value/multiple_options.twig */
class __TwigTemplate_f1cae87657f923144f0be019f4dfe7247da7131a156917e85a3ef09aaa5679bf extends \XLite\Core\Templating\Twig\Template
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
<label class=\"inline-checkbox multiple-checkbox\">
  <input type=\"checkbox\" tabindex=\"-1\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => "multiple"), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMultiple", array(), "method")) {
            echo " checked=\"checked\"";
        }
        echo " />
  <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMultipleTitle", array(), "method"), "html", null, true);
        echo "</span>
</label>
";
    }

    public function getTemplateName()
    {
        return "product/manage_attribute_value/multiple_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Multiple options */
/*  #}*/
/* */
/* <label class="inline-checkbox multiple-checkbox">*/
/*   <input type="checkbox" tabindex="-1" name="{{ this.getName('multiple') }}"{% if this.isMultiple() %} checked="checked"{% endif %} />*/
/*   <span>{{ this.getMultipleTitle() }}</span>*/
/* </label>*/
/* */
