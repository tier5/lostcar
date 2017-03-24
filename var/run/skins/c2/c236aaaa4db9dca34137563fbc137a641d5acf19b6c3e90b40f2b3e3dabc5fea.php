<?php

/* items_list/model/table/parts/selector.twig */
class __TwigTemplate_962cf530277fc1a6a497e2a6c6a3a963bbae3d5f8092022fde665ff869f4c908 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"selector\">
  <input type=\"checkbox\"
         name=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSelectorDataPrefix", array(), "method"), "html", null, true);
        echo "[";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getUniqueIdentifier", array(), "method"), "html", null, true);
        echo "]\"
         value=\"1\"
         class=\"selector not-significant\"
         autocomplete=\"off\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Selector*/
/*  #}*/
/* */
/* <div class="selector">*/
/*   <input type="checkbox"*/
/*          name="{{ this.getSelectorDataPrefix() }}[{{ this.entity.getUniqueIdentifier() }}]"*/
/*          value="1"*/
/*          class="selector not-significant"*/
/*          autocomplete="off"/>*/
/* </div>*/
/* */
