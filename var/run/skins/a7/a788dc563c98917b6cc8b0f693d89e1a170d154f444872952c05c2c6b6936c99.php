<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/main.footer.contacts.twig */
class __TwigTemplate_9b7c21522ebca326af59387f9605b772c2a464a073fb5920128184e528d6bb8d extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"footer_contacts\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\JThemesStudio\\The80sMod\\View\\Contacts"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/main.footer.contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="store.info.footer", weight="230")*/
/*  # @ListChild (list="welcome.contacts.info", weight="50")*/
/*  #}*/
/* */
/* <div class="footer_contacts">*/
/*     {{ widget('XLite\\Module\\JThemesStudio\\The80sMod\\View\\Contacts') }}*/
/* </div>*/
/* */
