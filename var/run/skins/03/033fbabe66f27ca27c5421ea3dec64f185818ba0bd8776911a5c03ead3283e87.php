<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/remove_agree.twig */
class __TwigTemplate_92dd71ade0e051e78d978b0b69e03ff3c3b748900392298bb090adb456c30a6f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasDisabledModulesHooks", array(), "method")) {
            // line 8
            echo "  <div class=\"alert agree-remove\">
    <input type=\"checkbox\" id=\"agree_remove\" name=\"agree_remove\" />
    <label for=\"agree_remove\">";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("I understand that the following disabled modules will be removed."));
            echo "</label>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/remove_agree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Checkbox*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections.left", weight="150")*/
/*  #}*/
/* */
/* {% if this.hasDisabledModulesHooks() %}*/
/*   <div class="alert agree-remove">*/
/*     <input type="checkbox" id="agree_remove" name="agree_remove" />*/
/*     <label for="agree_remove">{{ t('I understand that the following disabled modules will be removed.')|raw }}</label>*/
/*   </div>*/
/* {% endif %}*/
/* */
