<?php

/* common/sticky_panel.twig */
class __TwigTemplate_7b73fe6b219458a8c372e703cbdee6a3e0d057e3cb4e3392966b979a133ae5a3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\">
  <div class=\"box\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 6
(isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "common/sticky_panel.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/sticky_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Sticky panel*/
/*  #}*/
/* <div class="{{ this.getClass() }}">*/
/*   <div class="box">*/
/*     {% include this.getBody() %}*/
/*   </div>*/
/* </div>*/
/* */
