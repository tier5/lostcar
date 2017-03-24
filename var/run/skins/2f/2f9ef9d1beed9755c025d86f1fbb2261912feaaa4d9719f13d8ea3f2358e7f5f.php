<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/changelog_link.twig */
class __TwigTemplate_fb1606bf33813a92a37e62849cd8e927b8d57f7e443aab17d64c94341e7b12c2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getUpgradeChangelogs", array(), "method")) {
            // line 8
            echo "  <td class=\"changelog-link\"><span class=\"changelog-link\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "t", array(0 => "Changelog"), "method"), "html", null, true);
            echo "</span></td>
";
        } else {
            // line 10
            echo "  <td></td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/changelog_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Entry new version*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns", weight="300")*/
/*  #}*/
/* */
/* {% if this.entry.getUpgradeChangelogs() %}*/
/*   <td class="changelog-link"><span class="changelog-link">{{ this.t('Changelog') }}</span></td>*/
/* {% else %}*/
/*   <td></td>*/
/* {% endif %}*/
/* */
