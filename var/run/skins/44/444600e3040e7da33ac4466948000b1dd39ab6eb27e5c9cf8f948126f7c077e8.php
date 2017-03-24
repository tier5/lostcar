<?php

/* modules/CDev/GoSocial/button/social_button.twig */
class __TwigTemplate_5775b6e0982031b86a6338927ff9869efe353b7c885157c69aa0055acd05dab0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"likely\"
     ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataURL", array(), "method")) {
            echo "data-url=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataURL", array(), "method"), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "     ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataTitle", array(), "method")) {
            echo "data-title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataTitle", array(), "method"), "html", null, true);
            echo "\"";
        }
        // line 8
        echo ">
  <div";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonParamsCode", array(), "method");
        echo " class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonType", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoSocial/button/social_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  36 => 8,  29 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Common button*/
/*  #}*/
/* */
/* <div class="likely"*/
/*      {% if this.getDataURL() %}data-url="{{ this.getDataURL() }}"{% endif %}*/
/*      {% if this.getDataTitle() %}data-title="{{ this.getDataTitle() }}"{% endif %}*/
/* >*/
/*   <div{{ this.getButtonParamsCode()|raw }} class="{{ this.getButtonType() }}">{{ this.getButtonLabel() }}</div>*/
/* </div>*/
/* */
