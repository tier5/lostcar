<?php

/* model/header.twig */
class __TwigTemplate_f00b4d0d8890f3f135914dfe1fe7d24c9b256b283649cdbf845d07a80a4b8f08 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeaderText", array(), "method")) {
            // line 3
            echo "  <p class=\"header-text\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeaderText", array(), "method"), "html", null, true);
            echo "</p>
";
        }
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayViewSubList", array(0 => "header"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if this.getHeaderText() %}*/
/*   <p class="header-text">{{ this.getHeaderText() }}</p>*/
/* {% endif %}*/
/* {{ this.displayViewSubList('header') }}*/
/* */
