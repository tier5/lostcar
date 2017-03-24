<?php

/* items_list/module/manage/parts/columns/module-main-section/actions/uninstall.twig */
class __TwigTemplate_78653437f24d62e927138653f644a51f2c430b032bc9dba7a56a0a3a4d0ba125 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Remove", "buttonName" => (("switch[" . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method")) . "][delete]"), "label" => "Uninstall", "style" => "uninstall"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/module/manage/parts/columns/module-main-section/actions/uninstall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Modules actions list*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\Remove', buttonName='switch[' ~ this.module.getModuleId() ~ '][delete]', label='Uninstall', style='uninstall') }}*/
/* */
