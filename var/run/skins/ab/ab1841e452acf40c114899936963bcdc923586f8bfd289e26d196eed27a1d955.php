<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/not_avail_notice.twig */
class __TwigTemplate_e71d4efddc1c575b0539b94a3b52a6f859ab556707ff1109a202e6b4dc2d05dd extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showNotAvailModuleNotice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 7
            echo "  <div class=\"note error xcn-module-notice\">
  ";
            // line 8
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("This module is available for X-Cart hosted stores only.", array("url" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreInfoURL", array(), "method"))));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/install/parts/columns/info/not_avail_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Not available module notice*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="200")*/
/*  #}*/
/* {% if this.showNotAvailModuleNotice(this.module) %}*/
/*   <div class="note error xcn-module-notice">*/
/*   {{ t('This module is available for X-Cart hosted stores only.', {'url': this.getMoreInfoURL()})|raw }}*/
/*   </div>*/
/* {% endif %}*/
/* */
