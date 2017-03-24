<?php

/* product/attribute_value/select/body.twig */
class __TwigTemplate_3f687ecf555b8e5018277dbed58d5cca5c62d80a1f27227fac7f9816d6ab4453 extends \XLite\Core\Templating\Twig\Template
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
<label class=\"title\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "attribute", array()), "name", array()), "html", null, true);
        echo "</label>
<select class=\"form-control\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" data-attribute-id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "attribute", array()), "id", array()), "html", null, true);
        echo "\" ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSelectAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showPlaceholderOption", array(), "method")) {
            // line 8
            echo "    <option ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPlaceholderOptionAttributes", array(), "method")), "method");
            echo "disabled=\"disabled\" hidden=\"hidden\" selected=\"selected\" value=\"\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPlaceholderOptionLabel", array(), "method"), "html", null, true);
            echo "</option>
  ";
        }
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributeValue", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 11
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptionTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptionTemplate", array(), "method"), "product/attribute_value/select/body.twig", 11)->display(array_merge($context, array("option" => $context["v"])));
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 12
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "product/attribute_value/select/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  73 => 12,  62 => 11,  44 => 10,  36 => 8,  34 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Attribute value (Select)*/
/*  #}*/
/* */
/* <label class="title">{{ this.attribute.name }}</label>*/
/* <select class="form-control" name="{{ this.getName() }}" data-attribute-id="{{ this.attribute.id }}" {{ this.printTagAttributes(this.getSelectAttributes())|raw }}>*/
/*   {% if this.showPlaceholderOption() %}*/
/*     <option {{ this.printTagAttributes(this.getPlaceholderOptionAttributes())|raw }}disabled="disabled" hidden="hidden" selected="selected" value="">{{ this.getPlaceholderOptionLabel() }}</option>*/
/*   {% endif %}*/
/*   {% for v in this.getAttributeValue() %}*/
/*     {% include this.getOptionTemplate() with {'option': v} %}*/
/*   {% endfor %}*/
/* </select>*/
/* */
