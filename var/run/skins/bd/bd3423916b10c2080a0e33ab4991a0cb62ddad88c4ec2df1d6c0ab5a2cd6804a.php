<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/SimpleCMS/menus/default_option.twig */
class __TwigTemplate_e8cb1b4c7a09f7c17b4e47d8ef183e75d50a800ca76ea61f33c521b3e6eab777 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleShowDefaultOption", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox", "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "XC", array()), "SimpleCMS", array()), "show_default_menu", array()), "value" => "Y", "fieldName" => "show_default_menu", "label" => "Show default menu along with the custom one"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/SimpleCMS/menus/default_option.twig";
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
/*  # Menus list table template*/
/*  #*/
/*  # @ListChild (list="itemsList.cdev.simplecms.menu.header", weight="10")*/
/*  #}*/
/* */
/* {% if this.isVisibleShowDefaultOption() %}*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Checkbox', isChecked=this.config.XC.SimpleCMS.show_default_menu, value='Y', fieldName='show_default_menu', label='Show default menu along with the custom one') }}*/
/* {% endif %}*/
