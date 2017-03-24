<?php

/* items_list/empty.twig */
class __TwigTemplate_6b06e20bd5fae673b4549b101a94c98743851c5465e9cd6c58d55b0bc420804e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"empty-list\">";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListDescription", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/empty.twig";
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
/*  # Empty items list*/
/*  #}*/
/* */
/* <div class="empty-list">{{ this.getEmptyListDescription()|raw }}</div>*/
/* */
