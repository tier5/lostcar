<?php

/* /var/www/html/lostcar/skins/admin/import/parts/begin.files.orders_note.twig */
class __TwigTemplate_4261faf7f8e5dd00ada590d433efc2df89e6ea06f4f6f9ef2ea7de550e5268ac extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<p>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Import of orders is not supported.")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/import/parts/begin.files.orders_note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Import begin orders note*/
/*  #*/
/*  # @ListChild (list="import.begin.content.files", weight="100")*/
/*  #}*/
/* */
/* <p>{{ t('Import of orders is not supported.') }}</p>*/
/* */
