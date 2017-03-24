<?php

/* /var/www/html/lostcar/skins/admin/notifications/list.twig */
class __TwigTemplate_3b5295ecd39c01d902b429c2f44fd6578e38317502e6abd748c0c256e5214889 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"alert alert-info\" role=\"alert\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This page allows you to adjust the types of email notifications your store sends to users")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/notifications/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Notifications list table template*/
/*  #*/
/*  # @ListChild (list="itemsList.notification.header", weight="100")*/
/*  #}*/
/* */
/* <div class="alert alert-info" role="alert">*/
/*   {{ t('This page allows you to adjust the types of email notifications your store sends to users') }}*/
/* </div>*/
/* */
