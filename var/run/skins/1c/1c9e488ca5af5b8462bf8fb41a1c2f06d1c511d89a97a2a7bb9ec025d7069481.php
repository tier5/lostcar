<?php

/* /var/www/html/lostcar/skins/admin/layout_settings/settings/parts/settings.current_template.twig */
class __TwigTemplate_bd3227d047c20814ab9e8808989503d9ee534117e5697267ee616d7be9e6abd8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"current-template\"><span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Current template")), "html", null, true);
        echo ":</span> <span class=\"template-name\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentSkinName", array(), "method"), "html", null, true);
        echo "</span></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/layout_settings/settings/parts/settings.current_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings.settings", weight="20")*/
/*  #}*/
/* <div class="current-template"><span>{{ t('Current template') }}:</span> <span class="template-name">{{ this.getCurrentSkinName() }}</span></div>*/
/* */
