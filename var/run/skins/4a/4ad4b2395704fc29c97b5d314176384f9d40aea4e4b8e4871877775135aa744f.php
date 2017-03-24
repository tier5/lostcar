<?php

/* /var/www/html/lostcar/skins/admin/profile/delete_user.twig */
class __TwigTemplate_57e024464d2a55b1bf558453be0f15f52b88865ebffecd2a2a91d599bfa0cb99 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\DeleteProfile", "name" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete selected profile"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/profile/delete_user.twig";
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
/*  # Delete profile button. Admin area.*/
/*  #*/
/*  # @ListChild (list="itemsList.profile.search.footer", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\DeleteProfile', name=t('Delete'), label=t('Delete selected profile')) }}*/
/* */
