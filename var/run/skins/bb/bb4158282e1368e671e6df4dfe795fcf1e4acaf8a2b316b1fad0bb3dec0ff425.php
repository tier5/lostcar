<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/core_upgrade_needed/note_1_install.twig */
class __TwigTemplate_da3f66249f91463f5d7ff2773bd38ebb7c2c081aef45d03ac93a6828c667299a extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module version is incompatible with your core version and cannot be installed. Minimum core version required for this module is X.", array("version" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNeededCoreVersion", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")))), "html", null, true);
        echo "   
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/core_upgrade_needed/note_1_install.twig";
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
/*  # Note for "Install add-ons" page*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable.core_upgrade_needed", weight="100")*/
/*  #}*/
/* */
/* {{ t('The module version is incompatible with your core version and cannot be installed. Minimum core version required for this module is X.', {'version': this.getNeededCoreVersion(this.module)}) }}   */
/* */
