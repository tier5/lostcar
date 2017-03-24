<?php

/* layout/type1/welcome.news.block.twig */
class __TwigTemplate_05321f2a405ceeb735e1996e1eb23e6de55cab8818755c5ac665165025688128 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"news_block\">
    <div class=\"container dark-elements pagination-rotator\">
        ";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.news.block"))), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type1/welcome.news.block.twig";
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
/* <div class="news_block">*/
/*     <div class="container dark-elements pagination-rotator">*/
/*         {{ widget_list('welcome.news.block') }}*/
/*     </div>*/
/* </div>*/
