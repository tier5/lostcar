<?php

/* form_field/input/checkbox/module_switcher.twig */
class __TwigTemplate_bd58b2eea7713cd7fe696014f72d1dfaafa867d4717dfbddccd09df5aac3e33c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"input-field-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperClass", array(), "method"), "html", null, true);
        echo "\">
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
  <input type=\"hidden\" class=\"old-value\" name=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOldName", array(), "method"), "html", null, true);
        echo "\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(), "method"), "html", null, true);
        echo "\" />
  ";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSwitcherReadOnly", array(), "method"))) {
            // line 9
            echo "  <input type=\"hidden\" class=\"new-value\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "\" value=\"1\" />
  ";
        }
        // line 11
        echo "  <input";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo " />
  <div class=\"widget\">
    <i class=\"normal fa ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(), "method"), "html", null, true);
        echo "\"></i>
    ";
        // line 14
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSwitcherReadOnly", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHelpId", array(), "method"))) {
            // line 15
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "isImageTag" => "true", "className" => "help-icon", "imageClass" => sprintf("warning fa %s", $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWarningIcon", array(), "method")), "helpId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHelpId", array(), "method"), "delay" => 800))), "html", null, true);
            echo "
    ";
        }
        // line 17
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "form_field/input/checkbox/module_switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 15,  54 => 14,  50 => 13,  44 => 11,  38 => 9,  36 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Switcher checkbox*/
/*  #}*/
/* */
/* <div class="input-field-wrapper {{ this.getWrapperClass() }}">*/
/* {{ this.displayCommentedData(this.getCommentedData()) }}*/
/*   <input type="hidden" class="old-value" name="{{ this.getOldName() }}" value="{{ this.getValue() }}" />*/
/*   {% if this.getValue() and this.isSwitcherReadOnly() %}*/
/*   <input type="hidden" class="new-value" name="{{ this.getName() }}" value="1" />*/
/*   {% endif %}*/
/*   <input{{ this.getAttributesCode()|raw }} />*/
/*   <div class="widget">*/
/*     <i class="normal fa {{ this.getIcon() }}"></i>*/
/*     {% if this.isSwitcherReadOnly() and this.getHelpId() %}*/
/*       {{ widget('\\XLite\\View\\Tooltip', isImageTag='true', className='help-icon', imageClass='warning fa %s'|format(this.getWarningIcon()), helpId=this.getHelpId(), delay=800) }}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
