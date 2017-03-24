<?php

/* product/manage_attribute_value/text/body.twig */
class __TwigTemplate_5b73f28b1cd37c6d27fc51f6e26e825ab1ce2f018e980fea0a45166b1e913f58 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyle", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "maxHeight" => "100", "rows" => "3", "fieldOnly" => "true", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "attrValue", array()), "value", array())))), "html", null, true);
        echo "
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/manage_attribute_value/text/editable.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 7
        $this->loadTemplate("product/manage_attribute_value/text/editable.twig", "product/manage_attribute_value/text/body.twig", 7)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "product/manage_attribute_value/text/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Attribute value (Text)*/
/*  #}*/
/* */
/* <div class="{{ this.getStyle() }}">*/
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', fieldName=this.getName(), maxHeight='100', rows='3', fieldOnly='true', value=this.attrValue.value) }}*/
/*   {% include 'product/manage_attribute_value/text/editable.twig' %}*/
/* </div>*/
/* */
