<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/version_new.twig */
class __TwigTemplate_bf922daecb0aa9b5898c0818580e4c74cc7a10ef4cfbb0aa6151c4e774d30b82 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"new-version\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getVersionNew", array(), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/version_new.twig";
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
/*  # Entry new version*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.columns", weight="500")*/
/*  #}*/
/* */
/* <td class="new-version">{{ this.entry.getVersionNew() }}</td>*/
/* */
