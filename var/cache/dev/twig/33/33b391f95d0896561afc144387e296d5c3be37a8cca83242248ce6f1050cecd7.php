<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_22a808c4c75554c88c2549f960872fe19264bcad15cf37ecdf019e8e70f07fd7 extends Twig_Template
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
        $__internal_3719b564b72c4c5bdb5d5a21ae388caf20cdc339a931df0b5802af5ca70bf3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3719b564b72c4c5bdb5d5a21ae388caf20cdc339a931df0b5802af5ca70bf3f5->enter($__internal_3719b564b72c4c5bdb5d5a21ae388caf20cdc339a931df0b5802af5ca70bf3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_c1fe5b04c0ddf44d362f80632c3a8061061fbfcc2364107d333352e8b161c927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fe5b04c0ddf44d362f80632c3a8061061fbfcc2364107d333352e8b161c927->enter($__internal_c1fe5b04c0ddf44d362f80632c3a8061061fbfcc2364107d333352e8b161c927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3719b564b72c4c5bdb5d5a21ae388caf20cdc339a931df0b5802af5ca70bf3f5->leave($__internal_3719b564b72c4c5bdb5d5a21ae388caf20cdc339a931df0b5802af5ca70bf3f5_prof);

        
        $__internal_c1fe5b04c0ddf44d362f80632c3a8061061fbfcc2364107d333352e8b161c927->leave($__internal_c1fe5b04c0ddf44d362f80632c3a8061061fbfcc2364107d333352e8b161c927_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
