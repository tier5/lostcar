<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/version.twig */
class __TwigTemplate_9eee3388dd6b572361faf3a71257e00340ef9e24b14e2bb796bf270467445a5a extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<td class=\"new-version\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getVersionNew", array(), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/version.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Entry new version*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns", weight="300")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.columns", weight="300")*/
/*  #}*/
/* */
/* <td class="new-version">{{ this.entry.getVersionNew() }}</td>*/
/* */
