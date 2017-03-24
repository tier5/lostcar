<?php

/* modules/XC/NextPreviousProduct/head.twig */
class __TwigTemplate_7801af50a4c5b56d616e92f10aff662f616075ea16d6b715d30c56647cc6e2e5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<script type=\"text/javascript\">
xliteConfig['npCookiePath'] = '";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCookiePath", array(), "method"), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NextPreviousProduct/head.twig";
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
/*  # Header part*/
/*  #}*/
/* <script type="text/javascript">*/
/* xliteConfig['npCookiePath'] = '{{ this.getCookiePath() }}';*/
/* </script>*/
/* */
