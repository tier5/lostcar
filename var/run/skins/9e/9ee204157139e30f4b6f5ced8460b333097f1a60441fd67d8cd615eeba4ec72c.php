<?php

/* /var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-description-section/translation_notice.twig */
class __TwigTemplate_1498f2c2e06acedde45ba5b8fa2a086f68ee88021c4184a4804b3e6c58cfc458 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "isTranslation", array(), "method")) {
            // line 8
            echo "  <div class=\"description\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning! Installing this module will overwrite all language labels translated to the appropriate language.")), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/module/manage/parts/columns/module-description-section/translation_notice.twig";
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
/*  # Modules main description section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="15")*/
/*  #}*/
/* */
/* {% if this.module.isTranslation() %}*/
/*   <div class="description">{{ t('Warning! Installing this module will overwrite all language labels translated to the appropriate language.') }}</div>*/
/* {% endif %}*/
/* */
