<?php

/* model/body.twig */
class __TwigTemplate_5cdbb1be485831494859937478df79ded430544bcfd0acd4345405e38e232032 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTopInlineJSCode", array(), "method")) {
            // line 6
            echo "  <script type=\"text/javascript\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTopInlineJSCode", array(), "method");
            echo "</script>
";
        }
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 8
(isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/header.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/header.twig"), "model/body.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "
  ";
        // line 10
        $this->startForm($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormClass", array(), "method"), $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormWidgetParams", array(), "method"));        // line 11
        echo "
    <div class=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerClass", array(), "method"), "html", null, true);
        echo "\">
      ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 13
(isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/form_content.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/form_content.twig"), "model/body.twig", 13)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 14
        echo "      ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "useButtonPanel", array(), "method")) {
            // line 15
            echo "        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormTemplate", array(0 => "buttons"), "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormTemplate", array(0 => "buttons"), "method")), "model/body.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 16
            echo "      ";
        }
        // line 17
        echo "      ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "useButtonPanel", array(), "method")) {
            // line 18
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buttonPanel", array()), "display", array(), "method"), "html", null, true);
            echo "
      ";
        }
        // line 20
        echo "    </div>

  ";
        $this->endForm();        // line 23
        echo "
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 24
(isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/footer.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/footer.twig"), "model/body.twig", 24)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 25
        echo "
";
        // line 26
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBottomInlineJSCode", array(), "method")) {
            // line 27
            echo "  <script type=\"text/javascript\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBottomInlineJSCode", array(), "method");
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "model/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  107 => 26,  104 => 25,  94 => 24,  91 => 23,  87 => 20,  81 => 18,  78 => 17,  75 => 16,  64 => 15,  61 => 14,  51 => 13,  47 => 12,  44 => 11,  43 => 10,  40 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* */
/* {% if this.getTopInlineJSCode() %}*/
/*   <script type="text/javascript">{{ this.getTopInlineJSCode()|raw }}</script>*/
/* {% endif %}*/
/* {% include this.getDir() ~ '/header.twig' %}*/
/* */
/*   {% form this.getFormClass() with this.getFormWidgetParams() %}*/
/* */
/*     <div class="{{ this.getContainerClass() }}">*/
/*       {% include this.getDir() ~ '/form_content.twig' %}*/
/*       {% if not this.useButtonPanel() %}*/
/*         {% include this.getDir() ~ '/' ~ this.getFormTemplate('buttons') %}*/
/*       {% endif %}*/
/*       {% if this.useButtonPanel() %}*/
/*         {{ this.buttonPanel.display() }}*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*   {% endform %}*/
/* */
/* {% include this.getDir() ~ '/footer.twig' %}*/
/* */
/* {% if this.getBottomInlineJSCode() %}*/
/*   <script type="text/javascript">{{ this.getBottomInlineJSCode()|raw }}</script>*/
/* {% endif %}*/
/* */
