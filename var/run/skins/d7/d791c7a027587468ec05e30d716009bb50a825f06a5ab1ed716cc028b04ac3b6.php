<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/install.twig */
class __TwigTemplate_8eeedd1c7b5f91f62df65bb1a916a55c243ead9b86192f9b139cf3e806c4b2d8 extends \XLite\Core\Templating\Twig\Template
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
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Install updates")), "disabled" => "true", "style" => "regular-main-button disabled"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/install.twig";
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
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections.left", weight="200")*/
/*  #}*/
/* */
/* {% if this.isNextStepAvailable() %}*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Install updates'), disabled='true', style='regular-main-button disabled') }}*/
/* {% endif %}*/
/* */
