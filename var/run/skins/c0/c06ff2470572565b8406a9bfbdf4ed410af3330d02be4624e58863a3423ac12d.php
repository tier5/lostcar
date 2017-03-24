<?php

/* items_list/model/table.twig */
class __TwigTemplate_c7657f64d1d14e19dd2660060cb9b8e087f07ed71c8f4cd82a3b5aad011f7e33 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSearchVisible", array(), "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSearchPanelClass", array(), "method"), "itemsList" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsListObject", array(), "method")))), "html", null, true);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isWrapWithForm", array(), "method")) {
            // line 10
            echo "
  ";
            // line 11
            $this->startForm($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "class", array()), array("name" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "name", array()), "formTarget" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "target", array()), "formAction" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "action", array()), "formParams" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "params", array())));            // line 12
            echo "
    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table_content.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 13
            $this->loadTemplate("items_list/model/table_content.twig", "items_list/model/table.twig", 13)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 14
            echo "
  ";
            $this->endForm();            // line 16
            echo "
";
        } else {
            // line 18
            echo "
  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table_content.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 19
            $this->loadTemplate("items_list/model/table_content.twig", "items_list/model/table.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 20
            echo "
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  72 => 20,  67 => 19,  59 => 18,  55 => 16,  52 => 14,  47 => 13,  39 => 12,  38 => 11,  35 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Table model list*/
/*  #}*/
/* */
/* {% if this.isSearchVisible() %}*/
/*   {{ widget(this.getSearchPanelClass(), itemsList=this.getItemsListObject()) }}*/
/* {% endif %}*/
/* */
/* {% if this.isWrapWithForm() %}*/
/* */
/*   {% form this.formOptions.class with {name: this.formOptions.name, formTarget: this.formOptions.target, formAction: this.formOptions.action, formParams: this.formOptions.params} %}*/
/* */
/*     {% include 'items_list/model/table_content.twig' %}*/
/* */
/*   {% endform %}*/
/* */
/* {% else %}*/
/* */
/*   {% include 'items_list/model/table_content.twig' %}*/
/* */
/* {% endif %}*/
/* */
/* */
