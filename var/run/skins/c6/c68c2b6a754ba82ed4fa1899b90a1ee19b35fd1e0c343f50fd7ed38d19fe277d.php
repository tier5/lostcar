<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/welcome_news_messages/list/parts/cell.name.twig */
class __TwigTemplate_456e1db04d067ca5054af21e4879447b2a8000d68697edd873d72f8616596799 extends \XLite\Core\Templating\Twig\Template
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
<a class=\"newsMessageLink\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "news_message", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "id", array())))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "name", array()), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/welcome_news_messages/list/parts/cell.name.twig";
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
/*  # News messages :: name cell*/
/*  #*/
/*  # @ListChild (list="itemsList.newsMessages.customer.top.wcrow", weight="200")*/
/*  #}*/
/* */
/* <a class="newsMessageLink" href="{{ url('news_message', '', {'id': this.model.id}) }}">{{ this.model.name }}</a>*/
/* */
