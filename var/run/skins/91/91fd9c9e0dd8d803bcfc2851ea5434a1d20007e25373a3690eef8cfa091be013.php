<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/recover_password/parts/form.email.twig */
class __TwigTemplate_422d9d5d3ec80b3f47a54734168174bb5f88e47c6ed4d86b091bb8421f80c6d7 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"email-field field\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "email", array()), "required" => "true", "fieldName" => "email", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "false"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/recover_password/parts/form.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : form : email*/
/*  #*/
/*  # @ListChild (list="recover.password.fields", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="email-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', value=this.email, required='true', fieldName='email', label=t('Email'), fieldOnly='false') }}*/
/*   </td>*/
/* </tr>*/
/* */
