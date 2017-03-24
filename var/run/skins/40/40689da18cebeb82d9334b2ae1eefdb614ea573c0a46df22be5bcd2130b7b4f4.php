<?php

/* settings/body.twig */
class __TwigTemplate_0889325eac42b7c5bc67b2d2217c4193ecb7787ba162f3d0895151f836ef0d51 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div class=\"settings general-settings settings-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "html", null, true);
        echo " settings-\">
  ";
        // line 5
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "module")) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Model\\ModuleSettings", "useBodyTemplate" => "1"))), "html", null, true);
            echo "
  ";
        }
        // line 8
        echo "  ";
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) != "module")) {
            // line 9
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Model\\Settings", "useBodyTemplate" => "1"))), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "settings/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  35 => 9,  32 => 8,  26 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Model*/
/*  #}*/
/* <div class="settings general-settings settings-{{ this.page }} settings-">*/
/*   {% if this.target == 'module' %}*/
/*     {{ widget('\\XLite\\View\\Model\\ModuleSettings', useBodyTemplate='1') }}*/
/*   {% endif %}*/
/*   {% if this.target != 'module' %}*/
/*     {{ widget('\\XLite\\View\\Model\\Settings', useBodyTemplate='1') }}*/
/*   {% endif %}*/
/* </div>*/
/* */
