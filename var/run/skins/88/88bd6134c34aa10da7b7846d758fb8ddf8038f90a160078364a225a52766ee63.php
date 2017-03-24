<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/completed/backup/part/actions/soft_reset.twig */
class __TwigTemplate_fedcbee7a5bf5fe1288b5847356d60e808b10012ef7a495f89a199dd1ad1d93f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"upgrade-note soft-reset\">
  <span class=\"soft-reset-label\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Disables all addons except ones that are provided by X-Cart Team & Qualiteam (soft reset)"));
        echo ":</span>
  <div class=\"soft-reset-link-block safe-mode-link\">
\t  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\CopyLink", "copy" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSoftResetURL", array(), "method")))), "html", null, true);
        echo "
\t  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSoftResetURL", array(), "method"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/completed/backup/part/actions/soft_reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  28 => 11,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Soft reset*/
/*  #*/
/*  # @ListChild (list="upgrade.step.completed.backup.actions", weight="100")*/
/*  # @ListChild (list="upgrade.step.ready_to_install.create_backup.actions", weight="100")*/
/*  #}*/
/* */
/* <div class="upgrade-note soft-reset">*/
/*   <span class="soft-reset-label">{{ t('Disables all addons except ones that are provided by X-Cart Team & Qualiteam (soft reset)')|raw }}:</span>*/
/*   <div class="soft-reset-link-block safe-mode-link">*/
/* 	  {{ widget('XLite\\View\\Button\\CopyLink', copy=this.getSoftResetURL()) }}*/
/* 	  {{ this.getSoftResetURL() }}*/
/*   </div>*/
/* </div>*/
/* */
