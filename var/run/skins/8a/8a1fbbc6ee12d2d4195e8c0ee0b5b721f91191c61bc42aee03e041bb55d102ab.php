<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/language_labels.twig */
class __TwigTemplate_436ae1e25eaed2c76b7a8fa7947deb3870889d5f0f9b67fe063da7e9984261f0 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreloadedLabels", array(), "method")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/language_labels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Editor preloaded language labels*/
/*  #*/
/*  # @ListChild (list="inline_editor", weight="99999")*/
/*  #}*/
/* */
/* {{ this.displayCommentedData(this.getPreloadedLabels()) }}*/
/* */
