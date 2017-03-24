<?php

/* common/dialog.twig */
class __TwigTemplate_8ca6c0d14d1d0f6b5de2cf63362b61b9efc9d5fafd34773620bf1ccf97f1e8c7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array())) {
            // line 6
            echo "  <h2>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array()))), "html", null, true);
            echo "</h2>
";
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDialogCSSClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "body", array()));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "body", array()), "common/dialog.twig", 10)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "common/dialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  37 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common dialog*/
/*  #}*/
/* */
/* {% if this.head %}*/
/*   <h2>{{ t(this.head) }}</h2>*/
/* {% endif %}*/
/* */
/* <div class="{{ this.getDialogCSSClass() }}">*/
/*   {% include this.body %}*/
/* </div>*/
/* */
