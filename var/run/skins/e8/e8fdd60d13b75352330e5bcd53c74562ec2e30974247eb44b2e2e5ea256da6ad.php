<?php

/* /var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/agree.twig */
class __TwigTemplate_c4ed617ebd60b6fde37dbd40cf4ba7b265c104d2ceeb0aeff81adce776a84d5b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowCheckbox", array(), "method")) {
            // line 8
            echo "  <div class=\"alert agree\">
    <input type=\"checkbox\" id=\"agree\" name=\"agree\" />
    <label for=\"agree\">";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("I agree that these addons may require an adaptation."));
            echo "</label>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/agree.twig";
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
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections", weight="300")*/
/*  #}*/
/* */
/* {% if this.isShowCheckbox() %}*/
/*   <div class="alert agree">*/
/*     <input type="checkbox" id="agree" name="agree" />*/
/*     <label for="agree">{{ t('I agree that these addons may require an adaptation.')|raw }}</label>*/
/*   </div>*/
/* {% endif %}*/
