<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/completed/backup/part/actions/restore_backup.twig */
class __TwigTemplate_b043d8c6c2b7d1f4e7e47c13e67b48a6ba6ba7fb1caebc2b8915b07812074b98 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"upgrade-note restore-backup\">
  <span class=\"restore-backup-label\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Restore last backup")), "html", null, true);
        echo " <span class=\"small-note\">(";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("should be performed manually")), "html", null, true);
        echo ")</span></span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/completed/backup/part/actions/restore_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Hard reset*/
/*  #*/
/*  # @ListChild (list="upgrade.step.completed.backup.actions", weight="300")*/
/*  #}*/
/* */
/* <div class="upgrade-note restore-backup">*/
/*   <span class="restore-backup-label">{{ t('Restore last backup') }} <span class="small-note">({{ t('should be performed manually') }})</span></span>*/
/* </div>*/
/* */
