<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/News/news_messages/list/parts/cell.name.twig */
class __TwigTemplate_916850d79f061256ad756a3a411bcce76677e50952cfe966a2e0864a2b251bcb extends \XLite\Core\Templating\Twig\Template
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
<div class=\"news-message-link\"><a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "news_message", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "id", array())))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "name", array()), "html", null, true);
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/News/news_messages/list/parts/cell.name.twig";
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
/*  # @ListChild (list="itemsList.newsMessages.customer.center.row", weight="200")*/
/*  #}*/
/* */
/* <div class="news-message-link"><a href="{{ url('news_message', '', {'id': this.model.id}) }}">{{ this.model.name }}</a></div>*/
/* */
