<?php

/* layout/type2/welcome.cs.block.twig */
class __TwigTemplate_8c82ec54fab225613ebe50d9d9f13ad9de7c361c275e97ac35540c840bdee156 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"coming-soon-container\">
    ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.cs.block"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type2/welcome.cs.block.twig";
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
/* <div class="coming-soon-container">*/
/*     {{ widget_list('welcome.cs.block') }}*/
/* </div>*/
