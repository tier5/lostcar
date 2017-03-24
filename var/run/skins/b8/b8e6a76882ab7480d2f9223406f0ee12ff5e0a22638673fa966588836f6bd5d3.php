<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed/request_for_upgrade.twig */
class __TwigTemplate_f4c64d58452ab2190a127fd493bfd10b9ea14460baf5f6312383381c77ecb19f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUpgradeRequestAvailable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "    <div class=\"request-for-upgrade\" data-module-id=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method"), "html", null, true);
            echo "\">
        ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\ProgressState", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Request for upgrade")), "style" => "btn regular-button always-enabled"))), "html", null, true);
            // line 12
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed/request_for_upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 12,  29 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # "Module upgrade needed"*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable", weight="400")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable", weight="400")*/
/*  #}*/
/* */
/* {% if this.isUpgradeRequestAvailable(this.module) %}*/
/*     <div class="request-for-upgrade" data-module-id="{{ this.module.getModuleId() }}">*/
/*         {{  widget('XLite\\View\\Button\\ProgressState',*/
/*         label=t('Request for upgrade'),*/
/*         style='btn regular-button always-enabled') }}*/
/*     </div>*/
/* {% endif %}*/
/* */
