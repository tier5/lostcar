<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/already_installed.twig */
class __TwigTemplate_4582e4d2b388bfec84bc1f7699a7ba659603d50357e60aa25705da2d6063734f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInstalled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  <div class=\"installed\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Installed")), "html", null, true);
            echo "</div>
";
        }
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInstalled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 11
            echo "  <div class=\"view-module-in-list\">
    <a href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModulePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View in list")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/already_installed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  32 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="100")*/
/*  #}*/
/* */
/* {% if this.isInstalled(this.module) %}*/
/*   <div class="installed">{{ t('Installed') }}</div>*/
/* {% endif %}*/
/* {% if this.isInstalled(this.module) %}*/
/*   <div class="view-module-in-list">*/
/*     <a href="{{ this.getModulePageURL(this.module) }}">{{ t('View in list') }}</a>*/
/*   </div>*/
/* {% endif %}*/
