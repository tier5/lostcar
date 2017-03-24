<?php

/* layout/type1/subscribe.banners.container.twig */
class __TwigTemplate_5be4d4e41cceef536787097a88a46f11d7d84f42156726fd13c5b90edd54bf04 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"subscribe-block\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"subs-banner-column\">
                ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "subscribe.banners"))), "html", null, true);
        echo "
            </div>

            <div class=\"subs-banner-column subs-block\">
                ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome.subscribe.info"))), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout/type1/subscribe.banners.container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div class="subscribe-block">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="subs-banner-column">*/
/*                 {{ widget_list('subscribe.banners') }}*/
/*             </div>*/
/* */
/*             <div class="subs-banner-column subs-block">*/
/*                 {{ widget_list('welcome.subscribe.info') }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
