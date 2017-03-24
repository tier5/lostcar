<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/version_old.twig */
class __TwigTemplate_8587942a2818a19b3d3b9cdac4125c4a3a8af123119765e9e335ae5a96cba6d4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isInstalled", array(), "method")) {
            // line 8
            echo "  <td class=\"old-version\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getVersionOld", array(), "method"), "html", null, true);
            echo "</td>
";
        }
        // line 10
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isInstalled", array(), "method")) {
            // line 11
            echo "  <td class=\"old-version\">&mdash;</td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/version_old.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Entry old version*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.columns", weight="300")*/
/*  #}*/
/* */
/* {% if this.entry.isInstalled() %}*/
/*   <td class="old-version">{{ this.entry.getVersionOld() }}</td>*/
/* {% endif %}*/
/* {% if not this.entry.isInstalled() %}*/
/*   <td class="old-version">&mdash;</td>*/
/* {% endif %}*/
/* */
