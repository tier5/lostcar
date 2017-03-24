<?php

/* /var/www/html/lostcar/skins/admin/notifications/parts/warning.twig */
class __TwigTemplate_076216161031693fafc6d6e54aa2d6d9a37bf7184b927b89cba41337025a4921 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMbstringWarningVisible", array(), "method")) {
            // line 8
            echo "<div class=\"alert alert-warning attachment-warning\">
    ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("mbstring.extension.alert"));
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/notifications/parts/warning.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Banner promo block*/
/*  #*/
/*  # @ListChild (list="crud.notificationattachments.formHeader", zone="admin", weight="100")*/
/*  #}*/
/* */
/* {% if this.isMbstringWarningVisible() %}*/
/* <div class="alert alert-warning attachment-warning">*/
/*     {{ t('mbstring.extension.alert')|raw }}*/
/* </div>*/
/* {% endif %}*/
