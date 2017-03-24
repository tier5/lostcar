<?php

/* layout/type2/welcome.na.block.twig */
class __TwigTemplate_3d80a6e737437a1e228b8409f829d8a73bcc9e4ee5d48aaf1d7f625ac7c43884 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"new-arrivals-container\">
";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.na.block"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type2/welcome.na.block.twig";
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
/* <div class="new-arrivals-container">*/
/* {{ widget_list('welcome.na.block') }}*/
/* </div>*/
