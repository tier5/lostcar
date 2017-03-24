<?php

/* items_list/model/table/parts/switcher.twig */
class __TwigTemplate_7401c0f1a16f47cc8369814e1896c375cc51df6beabb1cb244ca130758f255e3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowEntitySwitch", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "switcherField", array()), "class", array()), "idx" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "idx", array()), "entity" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "column" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), "itemsList" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSelf", array(), "method"), "fieldName" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "switcherField", array()), "name", array()), "fieldParams" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "switcherField", array()), "params", array())))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Entity switcher*/
/*  #}*/
/* */
/* {% if this.isAllowEntitySwitch(this.entity) %}*/
/*   {{ widget(this.switcherField.class, idx=this.idx, entity=this.entity, column=this.column, itemsList=this.getSelf(), fieldName=this.switcherField.name, fieldParams=this.switcherField.params) }}*/
/* {% endif %}*/
/* */
