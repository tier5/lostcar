<?php

/* layout/type1/welcome.recently.block.twig */
class __TwigTemplate_9f771012cd4a68b8cd03909730d44308f3e0ad3f6d91961696dc3127cada21e7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"recently_viewed clearfix\">
    <div class=\"container\">
        ";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.recently.block"))), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type1/welcome.recently.block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div class="recently_viewed clearfix">*/
/*     <div class="container">*/
/*         {{ widget_list('welcome.recently.block') }}*/
/*     </div>*/
/* </div>*/
