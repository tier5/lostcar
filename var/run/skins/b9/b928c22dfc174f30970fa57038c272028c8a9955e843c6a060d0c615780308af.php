<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/header/component.twig */
class __TwigTemplate_53495f6c3be511bd7be692b362e00c6adc8f07922c47f9d5492292b73d77885e extends \XLite\Core\Templating\Twig\Template
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
<th class=\"module-info-header\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Component")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/header/component.twig";
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
/*  # The "Component" column header*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.header", weight="100")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.header", weight="100")*/
/*  #}*/
/* */
/* <th class="module-info-header">{{ t('Component') }}</th>*/
/* */
