<?php

/* modules/XC/Reviews/reviews_page/empty_reviews_list.twig */
class __TwigTemplate_3892ac4d13eb5d97f48560b143ef9e4524953631cc160167a14813fda4282178 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"empty-reviews-list\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("There are no comments yet. Be the first to leave a comment")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/reviews_page/empty_reviews_list.twig";
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
/*  # Empty reviews list*/
/*  #}*/
/* <div class="empty-reviews-list">*/
/*   {{ t('There are no comments yet. Be the first to leave a comment') }}*/
/* </div>*/
/* */
