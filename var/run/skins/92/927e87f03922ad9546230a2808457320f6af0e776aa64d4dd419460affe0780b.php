<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/header/version.twig */
class __TwigTemplate_c2001decd2536c7b97a0733c7771789db253f48eeaf5bddd92b21342cdace411 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"version\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Version")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/header/version.twig";
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
/*  # The "Version" column header*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.header", weight="300")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.header", weight="300")*/
/*  #}*/
/* */
/* <th class="version">{{ t('Version') }}</th>*/
/* */
