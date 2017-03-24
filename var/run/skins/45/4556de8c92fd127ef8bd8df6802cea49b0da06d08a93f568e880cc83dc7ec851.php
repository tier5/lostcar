<?php

/* /var/www/html/lostcar/skins/admin/export/parts/option.charset.twig */
class __TwigTemplate_49017d495dd2ccba09fbd4412819b27fb05abf60b3843fa598bf5324d2e754a6 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCharsetEnabled", array(), "method")) {
            // line 8
            echo "  <li class=\"charset-option\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Select\\IconvCharset", "fieldName" => "options[charset]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Character set")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Units", array()), "export_import_charset", array())))), "html", null, true);
            echo "
  </li>
";
        } else {
            // line 12
            echo "  <li class=\"charset-option\">
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Label", "fieldName" => "options[charset]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Character set")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Units", array()), "export_import_charset", array())))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/export/parts/option.charset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Export begin section : settings : charset setting*/
/*  #*/
/*  # @ListChild (list="export.begin.options", weight="300")*/
/*  #}*/
/* */
/* {% if this.isCharsetEnabled() %}*/
/*   <li class="charset-option">*/
/*     {{ widget('XLite\\View\\FormField\\Select\\IconvCharset', fieldName='options[charset]', label=t('Character set'), value=this.config.Units.export_import_charset) }}*/
/*   </li>*/
/* {% else %}*/
/*   <li class="charset-option">*/
/*     {{ widget('XLite\\View\\FormField\\Label', fieldName='options[charset]', label=t('Character set'), value=this.config.Units.export_import_charset) }}*/
/*   </li>*/
/* {% endif %}*/
/* */
