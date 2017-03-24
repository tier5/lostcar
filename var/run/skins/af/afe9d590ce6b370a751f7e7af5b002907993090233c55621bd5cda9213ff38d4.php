<?php

/* layout/type1/welcome.brands.rotator.container.twig */
class __TwigTemplate_0a2546ede838053d4697d8222fc7f2cbfd99ea2d2c984821a7cc5d0873c064d5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"brands-container clearfix\">
    <div class=\"container\">
    ";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.type1.brands.block"))), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type1/welcome.brands.rotator.container.twig";
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
/* <div class="brands-container clearfix">*/
/*     <div class="container">*/
/*     {{ widget_list('welcome.type1.brands.block') }}*/
/*     </div>*/
/* </div>*/
