<?php

/* top_links/version_notes/parts/core.twig */
class __TwigTemplate_098d4babf5c66cb024f4e00728748720c2024d9d85bd4abdebb1e807828ca993 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"version\"><div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X-Cart")), "html", null, true);
        echo "</div><div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEditionName", array(), "method"), "html", null, true);
        echo "&nbsp;";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCoreVersion", array(), "method"), "html", null, true);
        echo "</div></div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/core.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }
}
/* {##*/
/*  # "Core version" info*/
/*  #}*/
/* <div class="version"><div>{{ t('X-Cart') }}</div><div>{{ this.getEditionName() }}&nbsp;{{ this.getCurrentCoreVersion() }}</div></div>*/
/* */
