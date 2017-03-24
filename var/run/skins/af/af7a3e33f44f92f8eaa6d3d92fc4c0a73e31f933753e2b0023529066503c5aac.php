<?php

/* /var/www/html/lostcar/skins/admin/languages/languages/parts/import_language.twig */
class __TwigTemplate_796f57ff5d5895fb1abd7cbabbae1e49f7238610c8701d0ba1f21a3d5cada54b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"or\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</div>

";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\FileSelector", "label" => "Import language from CSV file", "object" => "language", "fileObject" => "file"))), "html", null, true);
        echo "

";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isImportActive", array(), "method")) {
            // line 12
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ImportLanguage"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/languages/languages/parts/import_language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  32 => 11,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Import language button widget template*/
/*  #*/
/*  # @ListChild (list="languages.add-language", weight="300")*/
/*  #}*/
/* */
/* <div class="or">{{ t('or') }}</div>*/
/* */
/* {{ widget('\\XLite\\View\\Button\\FileSelector', label='Import language from CSV file', object='language', fileObject='file') }}*/
/* */
/* {% if this.isImportActive() %}*/
/*   {{ widget('\\XLite\\View\\Button\\ImportLanguage') }}*/
/* {% endif %}*/
/* */
