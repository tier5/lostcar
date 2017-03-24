<?php

/* /var/www/html/lostcar/skins/admin/main/parts_non_root/title.twig */
class __TwigTemplate_20bff0a9c74a9ae7fdd6beeb5c2334a3c6e0a212c3c972f24dd15382143bcb51 extends \XLite\Core\Templating\Twig\Template
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
<h1>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You have the following roles:")), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/main/parts_non_root/title.twig";
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
/*  # Title*/
/*  #*/
/*  # @ListChild (list="dashboard-center.welcome.non-root", weight="10")*/
/*  #}*/
/* */
/* <h1>{{ t('You have the following roles:') }}</h1>*/
/* */
