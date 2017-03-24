<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/name.twig */
class __TwigTemplate_80524d6027ca9e07a5a58edf992060969e0ba144c9675b089b1637a7b432b72b extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"name\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInstalledModuleURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getModuleName", array(), "method"), "html", null, true);
        echo "</a></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/name.twig";
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
/*  # Upgrade entry name*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections.table.info", weight="100")*/
/*  #}*/
/* <li class="name"><a href="{{ this.getInstalledModuleURL(this.entry) }}">{{ this.entry.getModuleName() }}</a></li>*/
/* */
