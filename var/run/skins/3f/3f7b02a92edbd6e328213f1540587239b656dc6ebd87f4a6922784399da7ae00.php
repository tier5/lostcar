<?php

/* /var/www/html/lostcar/skins/customer/authorization/parts/link.forgot.twig */
class __TwigTemplate_a9c4e6f51b451f84b7e235b076070853c2cac9eecb7215d2a7e3d877aa865390 extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "recover_password")), "html", null, true);
        echo "\" class=\"forgot\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Forgot password?")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/authorization/parts/link.forgot.twig";
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
/*  # Link : forgot password*/
/*  #*/
/*  # @ListChild (list="customer.signin.popup.links", weight="100")*/
/*  #}*/
/* */
/* <a href="{{ url('recover_password') }}" class="forgot">{{ t('Forgot password?') }}</a>*/
/* */
