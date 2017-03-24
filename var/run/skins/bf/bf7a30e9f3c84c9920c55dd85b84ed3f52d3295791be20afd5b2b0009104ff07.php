<?php

/* form_field/input/checkbox/switcher.twig */
class __TwigTemplate_5db6b175f05e2abcce6d367ffc38cd5f44f623c67c7d12141cf59e823c296170 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"input-field-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperClass", array(), "method"), "html", null, true);
        echo "\">
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
<input type=\"hidden\" name=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" value=\"\" />
<input";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo " />
<div class=\"widget\" title=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetTitle", array(), "method"))), "html", null, true);
        echo "\" data-enabled-label=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEnabledLabel", array(), "method"))), "html", null, true);
        echo "\" data-disabled-label=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDisabledLabel", array(), "method"))), "html", null, true);
        echo "\">
<i class=\"fa ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(), "method"), "html", null, true);
        echo "\"></i>
</div>
</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/input/checkbox/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Switcher checkbox*/
/*  #}*/
/* */
/* <span class="input-field-wrapper {{ this.getWrapperClass() }}">*/
/* {{ this.displayCommentedData(this.getCommentedData()) }}*/
/* <input type="hidden" name="{{ this.getName() }}" value="" />*/
/* <input{{ this.getAttributesCode()|raw }} />*/
/* <div class="widget" title="{{ t(this.getWidgetTitle()) }}" data-enabled-label="{{ t(this.getEnabledLabel()) }}" data-disabled-label="{{ t(this.getDisabledLabel()) }}">*/
/* <i class="fa {{ this.getIcon() }}"></i>*/
/* </div>*/
/* </span>*/
/* */
