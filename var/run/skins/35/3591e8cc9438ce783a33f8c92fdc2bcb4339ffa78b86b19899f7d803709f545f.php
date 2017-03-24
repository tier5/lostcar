<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/News/top_news_messages/list/parts/cell.name.twig */
class __TwigTemplate_73925d8c569ace9bb43deb6ac3918b2ea2255ed4cfb662c2f2db29de301e3f75 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "news_message", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "id", array())))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "name", array()), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/News/top_news_messages/list/parts/cell.name.twig";
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
/*  # @ListChild (list="itemsList.newsMessages.customer.top.row", weight="200")*/
/*  #}*/
/* */
/* <a href="{{ url('news_message', '', {'id': this.model.id}) }}">{{ this.model.name }}</a>*/
/* */
