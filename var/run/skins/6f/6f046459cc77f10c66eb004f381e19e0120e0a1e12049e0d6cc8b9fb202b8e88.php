<?php

/* /var/www/html/lostcar/skins/admin/modules_manager/license/select_type_button.twig */
class __TwigTemplate_4ba58bddbbe8d775c2631ef39c1e9a836c4380af5f6536b74f80ae4cca59560a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUpgradeEntryAvailable", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Addon\\SelectInstallationType", "moduleId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleId", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Install add-on")), "style" => "submit-button main-button", "disabled" => "true"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules_manager/license/select_type_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules*/
/*  #*/
/*  # @ListChild (list="install-addon.buttons")*/
/*  #}*/
/* */
/* {% if this.isUpgradeEntryAvailable() %}*/
/*   {{ widget('\\XLite\\View\\Button\\Addon\\SelectInstallationType', moduleId=this.getModuleId(), label=t('Install add-on'), style='submit-button main-button', disabled='true') }}*/
/* {% endif %}*/
/* */
