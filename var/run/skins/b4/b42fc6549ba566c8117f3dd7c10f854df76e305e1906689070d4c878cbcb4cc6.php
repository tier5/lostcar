<?php

/* model/footer.twig */
class __TwigTemplate_a2c6319c7add1e8e940369ab0f182e5a948c1c7e205ac0269f62eaaefb86e5f4 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayViewSubList", array(0 => "footer"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ this.displayViewSubList('footer') }}*/
/* */
