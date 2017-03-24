<?php

/* common/tooltip.twig */
class __TwigTemplate_358c112a988ca4a4e66c1c47a3db1b144e63956d776c169d6c10621e7ec68675 extends \XLite\Core\Templating\Twig\Template
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
        ob_start();
        // line 6
        echo "<span
        data-toggle=\"popover\"
        data-trigger=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTrigger", array(), "method"), "html", null, true);
        echo "\"
        data-placement=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "placement"), "method"), "html", null, true);
        echo "\"
        data-content=\"";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "helpWidget"), "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "helpWidget"), "method"), "html", null, true);
        } else {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "text"), "method"), "html", null, true);
        }
        echo "\"
        data-html=\"true\"
        data-help-id=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHelpId", array(), "method"), "html", null, true);
        echo "\"
        data-delay=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDelay", array(), "method"), "html", null, true);
        echo "\"
        data-keep-on-hover=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isKeepOnHover", array(), "method"), "html", null, true);
        echo "\"
        v-xlite-tooltip
        class=\"tooltip-main\">

";
        // line 18
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isImageTag", array(), "method")) {
            // line 19
            echo "  <i ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
            echo "></i>
";
        } else {
            // line 21
            echo "  <span ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "caption"), "method"), "html", null, true);
            echo "</span>
";
        }
        // line 23
        echo "
</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "common/tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  68 => 21,  62 => 19,  60 => 18,  53 => 14,  49 => 13,  45 => 12,  36 => 10,  32 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Tooltip widget*/
/*  #}*/
/* */
/* {% spaceless %}*/
/* <span*/
/*         data-toggle="popover"*/
/*         data-trigger="{{ this.getTrigger() }}"*/
/*         data-placement="{{ this.getParam('placement') }}"*/
/*         data-content="{% if this.getParam('helpWidget') %}{{  this.getParam('helpWidget') }}{% else  %}{{ this.getParam('text') }}{% endif %}"*/
/*         data-html="true"*/
/*         data-help-id="{{ this.getHelpId() }}"*/
/*         data-delay="{{ this.getDelay() }}"*/
/*         data-keep-on-hover="{{ this.isKeepOnHover() }}"*/
/*         v-xlite-tooltip*/
/*         class="tooltip-main">*/
/* */
/* {% if this.isImageTag() %}*/
/*   <i {{ this.getAttributesCode()|raw }}></i>*/
/* {% else %}*/
/*   <span {{ this.getAttributesCode()|raw }}>{{ this.getParam('caption') }}</span>*/
/* {% endif %}*/
/* */
/* </span>*/
/* {% endspaceless %}*/
/* */
