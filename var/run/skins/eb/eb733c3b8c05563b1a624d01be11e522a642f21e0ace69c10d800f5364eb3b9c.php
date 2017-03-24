<?php

/* form_field/input/symbol.twig */
class __TwigTemplate_605f1efd5eb27252386f0f83fd7bde3606e300b0642c0948c4967848b89c4b5a extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
<span class=\"input-field-wrapper ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
  <span class=\"input-group-wrapper\">
    <div class=\"input-group\">
    <span class=\"input-group-addon\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSymbol", array(), "method"))), "html", null, true);
        echo "</span>
    <input";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo " />
    </div>
  </span>
</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/input/symbol.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <span class="input-field-wrapper {{ this.getWrapperClass() }}">*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/*   <span class="input-group-wrapper">*/
/*     <div class="input-group">*/
/*     <span class="input-group-addon">{{ t(this.getSymbol()) }}</span>*/
/*     <input{{ this.getAttributesCode()|raw }} />*/
/*     </div>*/
/*   </span>*/
/* </span>*/
/* */
