<?php

/* common/sidebar_box.twig */
class __TwigTemplate_696c93c8d01a43469a50cf293f06fb84344197c22e08b2a76cfbda461920520e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlockClasses", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHead", array(), "method")) {
            // line 7
            echo "  <h4>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHead", array(), "method"))), "html", null, true);
            echo "</h4>
  ";
        }
        // line 9
        echo "  <div class=\"content\">";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "common/sidebar_box.twig", 9)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/sidebar_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Side bar box*/
/*  #}*/
/* */
/* <div class="{{ this.getBlockClasses() }}">*/
/*   {% if this.getHead() %}*/
/*   <h4>{{ t(this.getHead()) }}</h4>*/
/*   {% endif %}*/
/*   <div class="content">{% include this.getBody() %}</div>*/
/* </div>*/
/* */
