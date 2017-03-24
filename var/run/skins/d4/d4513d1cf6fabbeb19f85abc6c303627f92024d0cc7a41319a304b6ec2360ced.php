<?php

/* /var/www/html/lostcar/skins/admin/import/parts/failed.buttons.reupload.twig */
class __TwigTemplate_38462feb5ab888055a59b1ecd10e56c0b6b98e14a1c534e26099923aa36bbf5c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImportTarget", array(), "method"), "reset")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Reupload files")), "style" => "main-button"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/import/parts/failed.buttons.reupload.twig";
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
/*  # Import failed section : button*/
/*  #*/
/*  # @ListChild (list="import.failed.buttons", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Link', location=url(this.getImportTarget(), 'reset'), label=t('Reupload files'), style='main-button') }}*/
/* */
