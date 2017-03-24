<?php

/* /var/www/html/lostcar/skins/admin/page/remove_data/parts/remove.twig */
class __TwigTemplate_a94f53bd47ba6434871f50cdac4289335e12768874496d8fe3aeb25f3583f228 extends \XLite\Core\Templating\Twig\Template
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
<p class=\"alert alert-warning note\" role=\"alert\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("This tool allows you to get rid of any content that might have been created in your store for testing purposes and which you no longer need."));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/page/remove_data/parts/remove.twig";
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
/*  # Remove data page template*/
/*  #*/
/*  # @ListChild (list="itemsList.removedata.header", weight="100")*/
/*  #}*/
/* */
/* <p class="alert alert-warning note" role="alert">{{ t('This tool allows you to get rid of any content that might have been created in your store for testing purposes and which you no longer need.')|raw }}</p>*/
/* */
