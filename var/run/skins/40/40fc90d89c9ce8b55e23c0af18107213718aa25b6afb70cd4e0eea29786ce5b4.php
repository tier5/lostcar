<?php

/* /var/www/html/lostcar/skins/admin/import/parts/failed.buttons.proceed.twig */
class __TwigTemplate_5c0b3e26ba18dd7b98d767cf6ec2c1ef1d6c7df71a3d1dbd722677daf58b5ab4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayProceedButton", array(), "method")) {
            // line 8
            echo "\t";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImportTarget", array(), "method"), "proceed")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Proceed import")), "style" => "main-button pull-right regular-main-button"))), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "\t";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "jsCode" => "return false;", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Proceed import")), "style" => "main-button regular-main-button pull-right disabled"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/import/parts/failed.buttons.proceed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Import failed section : button*/
/*  #*/
/*  # @ListChild (list="import.failed.buttons", weight="200")*/
/*  #}*/
/* */
/* {% if this.isDisplayProceedButton() %}*/
/* 	{{ widget('XLite\\View\\Button\\Link', location=url(this.getImportTarget(), 'proceed'), label=t('Proceed import'), style='main-button pull-right regular-main-button') }}*/
/* {% else %}*/
/* 	{{ widget('XLite\\View\\Button\\Link', jsCode='return false;', label=t('Proceed import'), style='main-button regular-main-button pull-right disabled') }}*/
/* {% endif %}*/
/* */
