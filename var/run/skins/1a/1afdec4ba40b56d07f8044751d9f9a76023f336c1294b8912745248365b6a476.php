<?php

/* /var/www/html/lostcar/skins/customer/authorization/parts/link.create.twig */
class __TwigTemplate_a7e8ff107fd08f8b5e7b4742e053e8db61f1880addf02fed464630c5ba540431 extends \XLite\Core\Templating\Twig\Template
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
<a class=\"create-account-link\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("mode" => "register"))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Create account")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/authorization/parts/link.create.twig";
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
/*  # Link : create account*/
/*  #*/
/*  # @ListChild (list="customer.signin.links", weight="100")*/
/*  #}*/
/* */
/* <a class="create-account-link" href="{{ url('profile', '', {'mode': 'register'}) }}">{{ t('Create account') }}</a>*/
/* */
