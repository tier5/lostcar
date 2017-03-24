<?php

/* layout/type1/welcome.top.banners.twig */
class __TwigTemplate_9fdc2bf2448635bf6aaaafaeafc47d953a9561f3178c03ccd523771e64dbe429 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"top-information clearfix\">
    ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.top.banners.container"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type1/welcome.top.banners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="top-information clearfix">*/
/*     {{ widget_list('welcome.top.banners.container') }}*/
/* </div>*/
