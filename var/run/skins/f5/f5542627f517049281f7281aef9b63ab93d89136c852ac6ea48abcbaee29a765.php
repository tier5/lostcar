<?php

/* layout/slidebar.twig */
class __TwigTemplate_a22ad8c77e0e69d7aa077a74f7ad1e4982d0e9c21fcb966b2a60438143e3f54a extends \XLite\Core\Templating\Twig\Template
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
<nav id=\"slidebar\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreloadedLabels", array(), "method")), "method"), "html", null, true);
        echo "
    <ul>
        <li class=\"slidebar-categories\">
            <span data-toggle=\"dropdown\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Categories")), "html", null, true);
        echo "</span>
            ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.categories"))), "html", null, true);
        echo "
        </li>
        ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.menu", "isSlidebar" => true))), "html", null, true);
        echo "
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "layout/slidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  33 => 10,  29 => 9,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Slidebar*/
/*  #}*/
/* */
/* <nav id="slidebar">*/
/*     {{ this.displayCommentedData(this.getPreloadedLabels()) }}*/
/*     <ul>*/
/*         <li class="slidebar-categories">*/
/*             <span data-toggle="dropdown">{{ t('Categories') }}</span>*/
/*             {{ widget_list('layout.header.categories') }}*/
/*         </li>*/
/*         {{ widget_list('header.menu', isSlidebar=true) }}*/
/*     </ul>*/
/* </nav>*/
/* */
