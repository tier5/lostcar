<?php

/* items_list/model/additional_buttons.twig */
class __TwigTemplate_51335fe68284e3c1f7c571e96613bec41ee10f6e222f9a976ed2b27b962150a4 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"additional-buttons\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayORLabel", array(), "method")) {
            // line 7
            echo "    <div class=\"or\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  <div class=\"btn-group\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method"));
        foreach ($context['_seq'] as $context["buttonName"] => $context["button"]) {
            // line 12
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["button"], "display", array(), "method"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['buttonName'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/additional_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  39 => 12,  35 => 11,  31 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Additional buttons list*/
/*  #}*/
/* */
/* <div class="additional-buttons">*/
/*   {% if this.isDisplayORLabel() %}*/
/*     <div class="or">{{ t('or') }}</div>*/
/*   {% endif %}*/
/* */
/*   <div class="btn-group">*/
/*     {% for buttonName, button in this.getAdditionalButtons() %}*/
/*       {{ button.display() }}*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
