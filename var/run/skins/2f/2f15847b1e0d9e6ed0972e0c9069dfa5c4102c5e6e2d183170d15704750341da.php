<?php

/* /var/www/html/lostcar/skins/admin/layout_settings/settings/parts/settings.layout_type.twig */
class __TwigTemplate_f0c485a308f8e31fa28d26f747772c88176ba3694f07d137ff37932424a9dcff extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"layout-type-selector\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\LayoutSettings\\LayoutTypeSelector", "availableTypes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLayoutTypes", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/layout_settings/settings/parts/settings.layout_type.twig";
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
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings.settings", weight="30")*/
/*  #}*/
/* <div class="layout-type-selector">*/
/*   {{ widget('XLite\\View\\LayoutSettings\\LayoutTypeSelector', availableTypes=this.getLayoutTypes()) }}*/
/* </div>*/
/* */
