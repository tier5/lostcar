<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/completed/backup/part/actions/restore_snapshot.twig */
class __TwigTemplate_4b097ee9365dd67980eddb38a15d0462bf83bda4275d86cb5a1b7f19af784ce7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCurrentSnapshotAvailable", array(), "method")) {
            // line 8
            echo "<div class=\"upgrade-note current-snapshot\">
    <span class=\"current-snapshot-label\">";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Restores to current state of active addons (use in case of emergency)"));
            echo ":</span>
    <div class=\"current-snapshot-link-block safe-mode-link\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\CopyLink", "copy" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentSnapshotURL", array(), "method")))), "html", null, true);
            echo "
      ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentSnapshotURL", array(), "method"), "html", null, true);
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/completed/backup/part/actions/restore_snapshot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Restore snapshot*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.create_backup.actions", weight="50")*/
/*  #}*/
/* */
/* {% if this.isCurrentSnapshotAvailable() %}*/
/* <div class="upgrade-note current-snapshot">*/
/*     <span class="current-snapshot-label">{{ t('Restores to current state of active addons (use in case of emergency)')|raw }}:</span>*/
/*     <div class="current-snapshot-link-block safe-mode-link">*/
/*       {{ widget('XLite\\View\\Button\\CopyLink', copy=this.getCurrentSnapshotURL()) }}*/
/*       {{ this.getCurrentSnapshotURL() }}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
