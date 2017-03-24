<?php

/* form_field/inline/input/text/integer/product_quantity.twig */
class __TwigTemplate_d8d58e0b4f08039197dd57acaef0c312820a86723305af4bdca0a4b4ba3906fe extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getInventoryEnabled", array(), "method")) {
            // line 6
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("form_field/inline/view.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("form_field/inline/view.twig", "form_field/inline/input/text/integer/product_quantity.twig", 6)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        } else {
            // line 8
            echo "  &infin;
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/inline/input/text/integer/product_quantity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product quantity*/
/*  #}*/
/* */
/* {% if this.entity.getInventoryEnabled() %}*/
/*   {% include 'form_field/inline/view.twig' %}*/
/* {% else %}*/
/*   &infin;*/
/* {% endif %}*/
/* */
