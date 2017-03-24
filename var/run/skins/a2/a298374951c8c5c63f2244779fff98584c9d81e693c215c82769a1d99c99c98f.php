<?php

/* button/remove.twig */
class __TwigTemplate_fb5a3120dfac9bba9fb30975d3ff17fa19985e4f8c8854a5517a533b9bff8ed7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"remove-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyle", array()), "html", null, true);
        echo "\">
  <button type=\"button\" class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyle", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"))), "html", null, true);
        echo "\" tabindex=\"-1\"><i class=\"fa fa-trash-o\"></i></button>
  <input type=\"checkbox\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" value=\"1\" tabindex=\"-1\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "button/remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Remove button*/
/*  #}*/
/* <div class="remove-wrapper {{ this.getStyle }}">*/
/*   <button type="button" class="{{ this.getStyle() }}" title="{{ t(this.getButtonLabel()) }}" tabindex="-1"><i class="fa fa-trash-o"></i></button>*/
/*   <input type="checkbox" name="{{ this.getName() }}" value="1" tabindex="-1" />*/
/* </div>*/
/* */
