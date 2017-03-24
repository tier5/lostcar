<?php

/* product/manage_attribute_value/modifiers.twig */
class __TwigTemplate_dcf7a271af4dfd326504d2ad69226067016ef707d9169d255a6a2773b5558ac9 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModified", array(0 => (isset($context["attributeValue"]) ? $context["attributeValue"] : null)), "method")) {
            // line 6
            echo "  <div class=\"modifiers\">
    <a href=\"#\" tabindex=\"-1\">";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Modifiers")), "html", null, true);
            echo "</a>
    <span class=\"text\">";
            // line 8
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModifiersAsString", array(0 => (isset($context["attributeValue"]) ? $context["attributeValue"] : null)), "method");
            echo "</span>
    <div class=\"popup\">
      <h4>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Modifiers")), "html", null, true);
            echo "</h4>
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModifiers", array(), "method"));
            foreach ($context['_seq'] as $context["field"] => $context["modifier"]) {
                // line 12
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text\\Modifier", "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => $context["field"], 1 => (isset($context["id"]) ? $context["id"] : null)), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["modifier"], "title", array()))), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModifierValue", array(0 => (isset($context["attributeValue"]) ? $context["attributeValue"] : null), 1 => $context["field"]), "method"), "attributes" => array("data-type" => $context["field"])))), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['modifier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      <div class=\"default clearfix\"><label><input type=\"checkbox\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => "default", 1 => (isset($context["id"]) ? $context["id"] : null)), "method"), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDefault", array(0 => (isset($context["attributeValue"]) ? $context["attributeValue"] : null)), "method")) {
                echo " checked";
            }
            echo " data-title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Default")), "html", null, true);
            echo "\" /> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Default option")), "html", null, true);
            echo "</label></div>
      <div class=\"arrow\"></div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "product/manage_attribute_value/modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  44 => 12,  40 => 11,  36 => 10,  31 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Multiple options */
/*  #}*/
/* */
/* {% if this.isModified(attributeValue) %}*/
/*   <div class="modifiers">*/
/*     <a href="#" tabindex="-1">{{ t('Modifiers') }}</a>*/
/*     <span class="text">{{ this.getModifiersAsString(attributeValue)|raw }}</span>*/
/*     <div class="popup">*/
/*       <h4>{{ t('Modifiers') }}</h4>*/
/*       {% for field, modifier in this.getModifiers() %}*/
/*         {{ widget('\\XLite\\View\\FormField\\Input\\Text\\Modifier', fieldName=this.getName(field, id), label=t(modifier.title), value=this.getModifierValue(attributeValue, field), attributes={'data-type': field}) }}*/
/*       {% endfor %}*/
/*       <div class="default clearfix"><label><input type="checkbox" name="{{ this.getName('default', id) }}"{% if this.isDefault(attributeValue) %} checked{% endif %} data-title="{{ t('Default') }}" /> {{ t('Default option') }}</label></div>*/
/*       <div class="arrow"></div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
