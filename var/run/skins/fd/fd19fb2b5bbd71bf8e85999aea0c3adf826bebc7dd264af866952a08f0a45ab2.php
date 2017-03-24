<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/try_again.twig */
class __TwigTemplate_8b21bac417a209c0f71d3ffaf3b703f8d233c46b63eb5bafd1df2e7dee87dff6 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 8
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNextStepAvailable", array(), "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Check again")), "style" => "regular-main-button", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCheckIntegrityURL", array(), "method")))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/try_again.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # The "Try again" button*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections.right", weight="200")*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.permissions.buttons", weight="200")*/
/*  #}*/
/* */
/* {% if not this.isNextStepAvailable() %}*/
/*   {{ widget('\\XLite\\View\\Button\\Link', label=t('Check again'), style='regular-main-button', location=this.getCheckIntegrityURL()) }}*/
/* {% endif %}*/
/* */
