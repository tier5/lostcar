<?php

/* model/form/footer.twig */
class __TwigTemplate_0dd32b96ebb8a71a17bcbb328416727c0d8a9b8777176f84ebca7c3cbeb5d712 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayViewSubList", array(0 => "formFooter"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/form/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* {{ this.displayViewSubList('formFooter') }}*/
/* */
