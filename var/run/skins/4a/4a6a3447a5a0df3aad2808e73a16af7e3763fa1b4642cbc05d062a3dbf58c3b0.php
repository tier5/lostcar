<?php

/* button/divider.twig */
class __TwigTemplate_bbbf410297663f7e66921d42ba9193aa290caa2fe03a6739235bc1eb02a928bb extends \XLite\Core\Templating\Twig\Template
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
        echo "\"></div>";
    }

    public function getTemplateName()
    {
        return "button/divider.twig";
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
/*  # Divider button*/
/*  #}*/
/* <div class="{{ this.getClass() }}"></div>*/
