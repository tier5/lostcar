<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/xcn_notice.twig */
class __TwigTemplate_b67ed3f5d5164e1f80396f53e13e3604c57d10eefd5ab735960c552df50d628f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showXCNModuleNotice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 7
            echo "  <div class=\"note error xcn-module-notice\">
  <span>
  ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Module available editions 4", array("list" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEditions", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"))));
            echo "
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ActivateKey", "label" => "Activate existing key"))), "html", null, true);
            echo "
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Addon\\EnterLicenseKey", "label" => "Activate existing key"))), "html", null, true);
            echo "
  </span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/xcn_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  29 => 10,  25 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # X-Cart module notice*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="200")*/
/*  #}*/
/* {% if this.showXCNModuleNotice(this.module) %}*/
/*   <div class="note error xcn-module-notice">*/
/*   <span>*/
/*   {{ t('Module available editions 4', {'list': this.getEditions(this.module)})|raw }}*/
/*     {{ widget('\\XLite\\View\\Button\\ActivateKey', label='Activate existing key') }}*/
/*     {{ widget('\\XLite\\View\\Button\\Addon\\EnterLicenseKey', label='Activate existing key') }}*/
/*   </span>*/
/*   </div>*/
/* {% endif %}*/
/* */
