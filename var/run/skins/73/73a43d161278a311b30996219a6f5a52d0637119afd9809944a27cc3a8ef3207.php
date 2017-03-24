<?php

/* items_list/module/manage/body.twig */
class __TwigTemplate_7d5410df67ccf2a7c94b9a315580ebb66a9b42ea03c59be1beafa82289930652 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections", "type" => "inherited", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/module/manage/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #}*/
/* */
/* {{ widget_list('sections', type='inherited', module=this.module) }}*/
/* */
