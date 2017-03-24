<?php

/* list_container.twig */
class __TwigTemplate_7d99ad4d0290756c8e44dd4eed5ea0f1c07a8792501f176878766dee63b933e5 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"list-container\" data-group=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getGroupName", array(), "method"), "html", null, true);
        echo "\">
\t";
        // line 6
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayInnerContent", array(), "method");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "list_container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #}*/
/* */
/* <div class="list-container" data-group="{{ this.getGroupName() }}">*/
/* 	{{ this.displayInnerContent()|raw }}*/
/* </div>*/
/* */
