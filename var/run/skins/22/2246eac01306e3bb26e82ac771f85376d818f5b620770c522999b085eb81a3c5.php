<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/core_upgrade_needed/note_2.twig */
class __TwigTemplate_fb0695c20f6fd3d1a1f5b4b79c367a6d53c9eb4f3bb0b0d152da401a9b0614d2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCoreUpgradeAvailable", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getMajorVersion", array(), "method")), "method")) {
            // line 9
            echo "  <div>
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please")), "html", null, true);
            echo " <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "upgrade", "", array("version" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getMajorVersion", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("upgrade core")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/core_upgrade_needed/note_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Recomendation to upgrade kernel*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable.core_upgrade_needed", weight="200")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable.core_upgrade_needed", weight="200")*/
/*  #}*/
/* */
/* {% if this.isCoreUpgradeAvailable(this.module.getMajorVersion()) %}*/
/*   <div>*/
/*     {{ t('Please') }} <a href="{{ url('upgrade', '', {'version': this.module.getMajorVersion()}) }}">{{ t('upgrade core') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
