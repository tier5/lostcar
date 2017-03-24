<?php

/* product/attribute_value/select/option.twig */
class __TwigTemplate_15849253a8c9f7395f7745636008930b763f50a4467d3c532f1afdcd7ae7bc2c extends \XLite\Core\Templating\Twig\Template
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
        echo "<option ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSelectedValue", array(0 => (isset($context["option"]) ? $context["option"] : null)), "method")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "id", array()), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptionTitle", array(0 => (isset($context["option"]) ? $context["option"] : null)), "method"), "html", null, true);
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModifierTitle", array(0 => (isset($context["option"]) ? $context["option"] : null)), "method");
        echo "</option>
";
    }

    public function getTemplateName()
    {
        return "product/attribute_value/select/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }
}
/* {##*/
/*  # Attribute value (Select option)*/
/*  #}*/
/* <option {% if this.isSelectedValue(option) %} selected="selected" {% endif %} value="{{ option.id }}">{{ this.getOptionTitle(option) }}{{ this.getModifierTitle(option)|raw }}</option>*/
/* */
