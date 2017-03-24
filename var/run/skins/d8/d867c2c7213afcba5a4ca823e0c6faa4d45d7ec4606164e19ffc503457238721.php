<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module.twig */
class __TwigTemplate_cffd8f845e4b01ec66e39a536686fdf657b5330fbbfd9bc3930484fd42915c47 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"module\">
  <ul class=\"details\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.info.module", "type" => "inherited", "entry" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())))), "html", null, true);
        echo "
  </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_upgrade.sections.table.info", weight="200")*/
/*  #}*/
/* <li class="module">*/
/*   <ul class="details">*/
/*   {{ widget_list('sections.table.info.module', type='inherited', entry=this.entry) }}*/
/*   </ul>*/
/* </li>*/
/* */
