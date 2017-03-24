<?php

/* form_field/inline.twig */
class __TwigTemplate_6cde300a50f038e6458ac36a41faf1f84f07d7afb52f2e2473eea8f18a3ab81e extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasSeparateView", array(), "method")) {
            // line 7
            echo "    <div ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewContainerAttributes", array(), "method")), "method");
            echo ">";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewTemplate", array(), "method"), "form_field/inline.twig", 7)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            echo "</div>
  ";
        }
        // line 9
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditable", array(), "method")) {
            // line 10
            echo "    <div ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldContainerAttributes", array(), "method")), "method");
            echo ">";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method"), "form_field/inline.twig", 10)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            echo "</div>
  ";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "form_field/inline.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  47 => 10,  44 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Inline container*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getContainerAttributes())|raw }}>*/
/*   {% if this.hasSeparateView() %}*/
/*     <div {{ this.printTagAttributes(this.getViewContainerAttributes())|raw }}>{% include this.getViewTemplate() %}</div>*/
/*   {% endif %}*/
/*   {% if this.isEditable() %}*/
/*     <div {{ this.printTagAttributes(this.getFieldContainerAttributes())|raw }}>{% include this.getFieldTemplate() %}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
