<?php

/* form_field/checkbox.twig */
class __TwigTemplate_f552270638ace46d2e1c9760cc2ab301e1ab9c53d1f984731293b603f6d27175 extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"input-field-wrapper checkbox ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
  <input type=\"hidden\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" value=\"\" />
  ";
        // line 7
        $context["caption"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "caption"), "method");
        // line 8
        echo "  ";
        if (twig_test_empty((isset($context["caption"]) ? $context["caption"] : null))) {
            // line 9
            echo "    <input";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
            echo " />
  ";
        } else {
            // line 11
            echo "    <label>
      <input";
            // line 12
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
            echo " />
      <span class=\"caption\">";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "</span>
    </label>
  ";
        }
        // line 16
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  50 => 13,  46 => 12,  43 => 11,  37 => 9,  34 => 8,  32 => 7,  28 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Checkbox template*/
/*  #}*/
/* <span class="input-field-wrapper checkbox {{ this.getWrapperClass() }}">*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/*   <input type="hidden" name="{{ this.getName() }}" value="" />*/
/*   {% set caption = this.getParam('caption') %}*/
/*   {% if caption is empty %}*/
/*     <input{{ this.getAttributesCode()|raw }} />*/
/*   {% else %}*/
/*     <label>*/
/*       <input{{ this.getAttributesCode()|raw }} />*/
/*       <span class="caption">{{ caption }}</span>*/
/*     </label>*/
/*   {% endif %}*/
/* </span>*/
/* */
