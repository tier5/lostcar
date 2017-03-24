<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info.twig */
class __TwigTemplate_65d8548259e651edc262e653fb0067620574d742464f6d24d68235cc76591d7f extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"module-info\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.info", "type" => "inherited", "entry" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())))), "html", null, true);
        echo "
</ul>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info.twig";
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
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections.table", weight="200")*/
/*  #}*/
/* <ul class="module-info">*/
/*   {{ widget_list('sections.table.info', type='inherited', entry=this.entry) }}*/
/* </ul>*/
/* <div class="clear"></div>*/
/* */
