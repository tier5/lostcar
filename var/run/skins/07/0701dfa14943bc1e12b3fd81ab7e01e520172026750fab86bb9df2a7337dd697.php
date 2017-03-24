<?php

/* form_field/textarea.twig */
class __TwigTemplate_3ac23dfbc931e47f9d7833f615ed8aa9eabe1e13beb664f434fc3077383fb79a extends \XLite\Core\Templating\Twig\Template
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
<textarea ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(), "method"), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "form_field/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* */
/* <textarea {{ this.getAttributesCode()|raw }}>{{ this.getValue() }}</textarea>*/
/* */
