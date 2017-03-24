<?php

/* model/form/header.twig */
class __TwigTemplate_00d424bc345b73f49776ea4039279030303e0fff9921cb1faf3cb25295757d20 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayViewSubList", array(0 => "formHeader"), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "model/form/header.twig";
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
/* {{ this.displayViewSubList('formHeader') }}*/
/* */
/* */
