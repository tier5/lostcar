<?php

/* form_field/inline/input/text.view.twig */
class __TwigTemplate_961292881cae0ffee84f6746a17955aa9cc95ca528297e002c8c8b1c09da0938 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"value\">";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("form_field/inline/view.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 5
        $this->loadTemplate("form_field/inline/view.twig", "form_field/inline/input/text.view.twig", 5)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        echo "</span>
<img src=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
        echo "\" class=\"right-fade\" alt=\"\" />
";
    }

    public function getTemplateName()
    {
        return "form_field/inline/input/text.view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  27 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Inline text field view*/
/*  #}*/
/* */
/* <span class="value">{% include 'form_field/inline/view.twig' %}</span>*/
/* <img src="{{ asset('images/spacer.gif') }}" class="right-fade" alt="" />*/
/* */
