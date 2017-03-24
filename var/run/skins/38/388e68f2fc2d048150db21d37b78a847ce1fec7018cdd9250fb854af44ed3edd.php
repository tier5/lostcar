<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/sections/javascript.twig */
class __TwigTemplate_470ac03f3d577f50aac3b401a952b8347f1732f673a9453e1c940a598396bab5 extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
//<![CDATA[
var confirmNotes = [];
confirmNotes['uninstall'] = '";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Are you sure you want to uninstall this add-on?")), "html", null, true);
        echo "';
confirmNotes['delete']    = '";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Are you sure you want to uninstall selected add-ons?")), "html", null, true);
        echo "';
confirmNotes['enable']    = '";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Are you sure you want to enable this add-on?")), "html", null, true);
        echo "';
confirmNotes['disable']   = '";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Are you sure you want to disable this add-on?")), "html", null, true);
        echo "';
confirmNotes['enableDependent'] = '";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please note that the following modules will also be enabled")), "html", null, true);
        echo "';
confirmNotes['default']   = '";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Are you sure?")), "html", null, true);
        echo "';
var dependedAlert = '";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The following dependent add-ons will be disabled  automatically")), "html", null, true);
        echo ":';
var depends = [];
var dependents = [];
var moduleStatuses = [];
var uninstallModules = [];
var moduleNames = [];
//]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/sections/javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  45 => 15,  41 => 14,  37 => 13,  33 => 12,  29 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.sections", weight="100")*/
/*  #}*/
/* */
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* var confirmNotes = [];*/
/* confirmNotes['uninstall'] = '{{ t('Are you sure you want to uninstall this add-on?') }}';*/
/* confirmNotes['delete']    = '{{ t('Are you sure you want to uninstall selected add-ons?') }}';*/
/* confirmNotes['enable']    = '{{ t('Are you sure you want to enable this add-on?') }}';*/
/* confirmNotes['disable']   = '{{ t('Are you sure you want to disable this add-on?') }}';*/
/* confirmNotes['enableDependent'] = '{{ t('Please note that the following modules will also be enabled') }}';*/
/* confirmNotes['default']   = '{{ t('Are you sure?') }}';*/
/* var dependedAlert = '{{ t('The following dependent add-ons will be disabled  automatically') }}:';*/
/* var depends = [];*/
/* var dependents = [];*/
/* var moduleStatuses = [];*/
/* var uninstallModules = [];*/
/* var moduleNames = [];*/
/* //]]>*/
/* </script>*/
/* */
