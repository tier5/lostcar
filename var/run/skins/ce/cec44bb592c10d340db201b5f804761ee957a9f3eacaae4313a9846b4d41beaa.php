<?php

/* product/manage_attribute_value/checkbox/body.twig */
class __TwigTemplate_60261cfb068a073f767d7899a4ed2501dcdd53249ee38bc9a6eb753dc5808053 extends \XLite\Core\Templating\Twig\Template
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
        $this->loadTemplate("product/manage_attribute_value/multiple_options.twig", "product/manage_attribute_value/checkbox/body.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "  <div class=\"single-option\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetClass", array(), "method"), "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "fieldOnly" => "true", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSelectValue", array(), "method")))), "html", null, true);
        echo "
  </div>
  <ul class=\"multiple-options\">
    ";
        // line 11
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
            // line 12
            echo "      <li class=\"clearfix line value\">
        <div class=\"value\">
          ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldOnly" => "true", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(0 => $context["id"]), "method"), "attributes" => array("readonly" => "readonly"), "wrapperClass" => "attribute-value-checkbox"))), "html", null, true);
            echo "
          ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/manage_attribute_value/modifiers.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 15
            $this->loadTemplate("product/manage_attribute_value/modifiers.twig", "product/manage_attribute_value/checkbox/body.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 16
            echo "        </div>
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
        return "product/manage_attribute_value/checkbox/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  80 => 16,  75 => 15,  66 => 14,  62 => 12,  45 => 11,  39 => 8,  36 => 7,  31 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Attribute value (Text)*/
/*  #}*/
/* */
/* <div class="{{ this.getStyle() }}">*/
/*   {% include 'product/manage_attribute_value/multiple_options.twig' %}*/
/*   <div class="single-option">*/
/*     {{ widget(this.getWidgetClass(), fieldName=this.getName(), fieldOnly='true', value=this.getSelectValue()) }}*/
/*   </div>*/
/*   <ul class="multiple-options">*/
/*     {% for id, attributeValue in this.getAttrValues() %}*/
/*       <li class="clearfix line value">*/
/*         <div class="value">*/
/*           {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldOnly='true', value=this.getLabel(id), attributes={'readonly': 'readonly'}, wrapperClass='attribute-value-checkbox') }}*/
/*           {% include 'product/manage_attribute_value/modifiers.twig' %}*/
/*         </div>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
