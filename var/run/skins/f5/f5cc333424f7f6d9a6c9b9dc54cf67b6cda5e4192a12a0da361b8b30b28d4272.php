<?php

/* product/manage_attribute_value/select/body.twig */
class __TwigTemplate_b421d3b401e2ed4369cd3ac113f6ed29f10a2ca19f56a7b640667c7e1cd8f290 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyle", array(), "method"), "html", null, true);
        echo "\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/manage_attribute_value/multiple_options.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 6
        $this->loadTemplate("product/manage_attribute_value/multiple_options.twig", "product/manage_attribute_value/select/body.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "  <ul class=\"values\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttrValues", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["attributeValue"]) {
            // line 9
            echo "      <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValueStyle", array(0 => $context["id"]), "method"), "html", null, true);
            echo "\">
        <div class=\"value\">
          ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetClass", array(), "method"), "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => "value", 1 => $context["id"]), "method"), "fieldOnly" => "true", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldValue", array(0 => $context["attributeValue"]), "method"), "attribute" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttribute", array(), "method"), "attributes" => array("placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Attribute option")))))), "html", null, true);
            echo "
          ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/manage_attribute_value/modifiers.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 12
            $this->loadTemplate("product/manage_attribute_value/modifiers.twig", "product/manage_attribute_value/select/body.twig", 12)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 13
            echo "        </div>
        <div class=\"actions\">
          ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Remove", "buttonName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(0 => "deleteValue", 1 => $context["id"]), "method")))), "html", null, true);
            echo "
        </div>
      </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['attributeValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/manage_attribute_value/select/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  80 => 15,  76 => 13,  71 => 12,  62 => 11,  56 => 9,  39 => 8,  36 => 7,  31 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Attribute value (Select)*/
/*  #}*/
/* */
/* <div class="{{ this.getStyle() }}">*/
/*   {% include 'product/manage_attribute_value/multiple_options.twig' %}*/
/*   <ul class="values">*/
/*     {% for id, attributeValue in this.getAttrValues() %}*/
/*       <li class="{{ this.getValueStyle(id) }}">*/
/*         <div class="value">*/
/*           {{ widget(this.getWidgetClass(), fieldName=this.getName('value', id), fieldOnly='true', value=this.getFieldValue(attributeValue), attribute=this.getAttribute(), attributes={'placeholder': t('Attribute option')}) }}*/
/*           {% include 'product/manage_attribute_value/modifiers.twig' %}*/
/*         </div>*/
/*         <div class="actions">*/
/*           {{ widget('XLite\\View\\Button\\Remove', buttonName=this.getName('deleteValue', id)) }}*/
/*         </div>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
