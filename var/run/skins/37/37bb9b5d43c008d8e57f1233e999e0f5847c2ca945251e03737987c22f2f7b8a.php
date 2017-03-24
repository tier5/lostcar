<?php

/* /var/www/html/lostcar/skins/admin/export/parts/option.files.twig */
class __TwigTemplate_60fb50f24c128714b2f1e746acbc27d18372ebb8b34cfbaaa5d1b854e8ee3058 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"files-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Select\\ExportFiles", "fieldName" => "options[files]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Export public files as")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Export", array()), "files", array()), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choosing \"URLs\" will link the exported data to your public files (product and category images, downloadable files shown on product pages, and so on) through direct URLs"))))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/export/parts/option.files.twig";
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
/*  # @ListChild (list="export.begin.options", weight="100")*/
/*  #}*/
/* */
/* <li class="files-option">*/
/*   {{ widget('XLite\\View\\FormField\\Select\\ExportFiles', fieldName='options[files]', label=t('Export public files as'), value=this.config.Export.files, help=t('Choosing "URLs" will link the exported data to your public files (product and category images, downloadable files shown on product pages, and so on) through direct URLs')) }}*/
/* </li>*/
/* */
