<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/welcome_news_messages/list/parts/cell.image.twig */
class __TwigTemplate_0ba6725aab92d4ae563d9df15da480077d0ab9ad527181073dbebf36e7f970f7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"newsMessagePhoto\">
    <a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "news_message", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "id", array())))), "html", null, true);
        echo "\">
        ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "image", array()), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "name", array())))), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/modules/XC/News/welcome_news_messages/list/parts/cell.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # News messages :: date cell*/
/*  #*/
/*  # @ListChild (list="itemsList.newsMessages.customer.top.wrow", weight="50")*/
/*  #}*/
/* <div class="newsMessagePhoto">*/
/*     <a href="{{ url('news_message', '', {'id': this.model.id}) }}">*/
/*         {{ widget('\\XLite\\View\\Image', image=this.model.image, alt=this.model.name) }}*/
/*     </a>*/
/* </div>*/
/* */
