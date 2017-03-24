<?php

/* layout/content/banner.rotator.container.twig */
class __TwigTemplate_397ae806c8780f2f982d5d4ce4a32c24bffba40a688ddf21263a2066f84a6b1a extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.banner.rotator.container"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "layout/content/banner.rotator.container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ widget_list('welcome.banner.rotator.container') }}*/
