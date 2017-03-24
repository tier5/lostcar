<?php

/* /var/www/html/lostcar/skins/admin/export/parts/option.attrs.twig */
class __TwigTemplate_63cfbfd2bd73a680b3b2cc7d7f88703da3509ec71af459ae9c4f370d8c17e7a0 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"attrs-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Select\\ExportAttrs", "fieldName" => "options[attrs]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Export product data with")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Export", array()), "attrs", array())))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/export/parts/option.attrs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Export begin section : settings : files setting*/
/*  #*/
/*  # @ListChild (list="export.begin.options", weight="200")*/
/*  #}*/
/* */
/* <li class="attrs-option">*/
/*   {{ widget('XLite\\View\\FormField\\Select\\ExportAttrs', fieldName='options[attrs]', label=t('Export product data with'), value=this.config.Export.attrs) }}*/
/* </li>*/
/* */
