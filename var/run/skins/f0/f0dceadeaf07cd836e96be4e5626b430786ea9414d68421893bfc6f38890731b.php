<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed/note.twig */
class __TwigTemplate_48ea08287501da9db4277121cb5760dabd67ea55df9b207953878944a0dee6cc extends \XLite\Core\Templating\Twig\Template
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
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module is not released for your X-Cart version")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed/note.twig";
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
/*  # Note for wrong module version*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable.module_upgrade_needed", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable.module_upgrade_needed", weight="100")*/
/*  #}*/
/* */
/* {{ t('The module is not released for your X-Cart version') }}*/
/* */
