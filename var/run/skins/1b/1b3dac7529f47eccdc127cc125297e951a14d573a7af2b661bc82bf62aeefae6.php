<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/agree.twig */
class __TwigTemplate_f7445e8878f265850fd886865e9d9df122817429b39461b7c481d228d5e93382 extends \XLite\Core\Templating\Twig\Template
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
            echo "  <div class=\"alert agree\">
    <input type=\"checkbox\" id=\"agree\" name=\"agree\" />
    <label for=\"agree\">";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Yes, I have made the full backup of my store files and database"));
            echo "</label>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/ready_to_install/buttons/parts/agree.twig";
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
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections.left", weight="100")*/
/*  #}*/
/* */
/* {% if this.isNextStepAvailable() %}*/
/*   <div class="alert agree">*/
/*     <input type="checkbox" id="agree" name="agree" />*/
/*     <label for="agree">{{ t('Yes, I have made the full backup of my store files and database')|raw }}</label>*/
/*   </div>*/
/* {% endif %}*/
/* */
