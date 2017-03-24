<?php

/* /var/www/html/lostcar/skins/admin/export/parts/popup.completed.message.twig */
class __TwigTemplate_14a4aa050b18e43c666756b5d36caa168a7d5cfa8568b6a1d3cf690da3e27a0f extends \XLite\Core\Templating\Twig\Template
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
 <p class=\"help\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The download should start automatically. Click the link if does not start.")), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/export/parts/popup.completed.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Export completed section : button*/
/*  #*/
/*  # @ListChild (list="export.popup.completed.content", weight="100")*/
/*  #}*/
/* */
/*  <p class="help">{{ t('The download should start automatically. Click the link if does not start.') }}</p>*/
