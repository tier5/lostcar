<?php

/* /var/www/html/lostcar/skins/admin/zones/details/parts/field.city.twig */
class __TwigTemplate_98873516aea0ac371dcf59c4f66ed8d417dda64f6c629ec92b6d059d3e6828e0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCityMasksEditEnabled", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneCities", array(0 => 1), "method"), "label" => "City masks", "rows" => "5", "cols" => "70", "fieldName" => "zone_cities", "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zone city masks help"))))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/zones/details/parts/field.city.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Zone: city masks template*/
/*  #*/
/*  # @ListChild (list="zones.zone.details", weight="300")*/
/*  #}*/
/* */
/* {% if this.isCityMasksEditEnabled() %}*/
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', value=this.zone.getZoneCities(1), label='City masks', rows='5', cols='70', fieldName='zone_cities', help=t('Zone city masks help')) }}*/
/* {% endif %}*/
/* */
