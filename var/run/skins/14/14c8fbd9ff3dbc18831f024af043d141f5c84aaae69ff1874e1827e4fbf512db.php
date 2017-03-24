<?php

/* modules/XC/FroalaEditor//form_field/textarea.twig */
class __TwigTemplate_02c0ed1b939ecd79dca7184aa355667af5064f93393b4b537a2835224f9753ab extends \XLite\Core\Templating\Twig\Template
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
<div class=\"froala-widget\">
    <div class=\"textarea\">
        ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFroalaConfiguration", array(), "method")), "method"), "html", null, true);
        echo "
        <textarea ";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProcessedValue", array(), "method"), "html", null, true);
        echo "</textarea>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/XC/FroalaEditor//form_field/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* */
/* <div class="froala-widget">*/
/*     <div class="textarea">*/
/*         {{ this.displayCommentedData(this.getFroalaConfiguration()) }}*/
/*         <textarea {{ this.getAttributesCode()|raw }}>{{ this.getProcessedValue() }}</textarea>*/
/*     </div>*/
/* </div>*/
/* */
/* */
