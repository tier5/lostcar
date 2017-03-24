<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/buttons/parts/continue.twig */
class __TwigTemplate_fb328375ee93971521fc4977bf00589df57ba0e44d8e1aa6d6bd3bebdd8398ec extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNextStepAvailable", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "style" => "regular-main-button main-button", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Continue"))))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/buttons/parts/continue.twig";
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
/*  # The "Continue" button*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.buttons.sections", weight="200")*/
/*  #}*/
/* */
/* {% if this.isNextStepAvailable() %}*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', style='regular-main-button main-button', label=t('Continue')) }}*/
/* {% endif %}*/
/* */
