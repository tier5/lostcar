<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/description.twig */
class __TwigTemplate_aecc4ae1e3a1ceed8499dc8539f89dac7fb2089a9391e7c20716f2c66cd51113 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"incompatible-module-list-description\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your custom addons were prepared for certain core version")), "html", null, true);
        echo "
</div>
";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasDisabledEntries", array(), "method")) {
            // line 11
            echo "  <div class=\"incompatible-module-list-description\">
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please note that some of these modules are definitely incompatible with the upcoming upgrade and will be disabled in order to prevent the system crash")), "html", null, true);
            echo ".
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  30 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Info message*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections", weight="100")*/
/*  #}*/
/* */
/* <div class="incompatible-module-list-description">*/
/*   {{ t('Your custom addons were prepared for certain core version') }}*/
/* </div>*/
/* {% if this.hasDisabledEntries() %}*/
/*   <div class="incompatible-module-list-description">*/
/*     {{ t('Please note that some of these modules are definitely incompatible with the upcoming upgrade and will be disabled in order to prevent the system crash') }}.*/
/*   </div>*/
/* {% endif %}*/
/* */
