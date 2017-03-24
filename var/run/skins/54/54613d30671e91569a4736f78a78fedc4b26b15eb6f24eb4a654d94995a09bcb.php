<?php

/* product/manage_attribute_value/text/editable.twig */
class __TwigTemplate_4935e81659cdfc79e4814d4ef51358a220e4e5e0166787b57b44533d4f92b69f extends \XLite\Core\Templating\Twig\Template
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
<label class=\"inline-checkbox editable-checkbox\">
  <input type=\"hidden\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => "editable"), "method"), "html", null, true);
        echo "\" value=\"0\" />
  <input type=\"checkbox\" name=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => "editable"), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditable", array(), "method")) {
            echo " checked=\"checked\"";
        }
        echo " />
  <span>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("editable")), "html", null, true);
        echo "</span>
</label>

";
    }

    public function getTemplateName()
    {
        return "product/manage_attribute_value/text/editable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  27 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Editable option*/
/*  #}*/
/* */
/* <label class="inline-checkbox editable-checkbox">*/
/*   <input type="hidden" name="{{ this.getName('editable') }}" value="0" />*/
/*   <input type="checkbox" name="{{ this.getName('editable') }}"{% if this.isEditable() %} checked="checked"{% endif %} />*/
/*   <span>{{ t('editable') }}</span>*/
/* </label>*/
/* */
/* */
