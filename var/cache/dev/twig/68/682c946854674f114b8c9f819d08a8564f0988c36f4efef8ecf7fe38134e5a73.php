<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4a363078fd6271e694900a71ee133663efe6d609b00f5d5ca89585b62a02a457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'Body' => array($this, 'block_Body'),
            'Content' => array($this, 'block_Content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caf80b780dbd1e39b23cccb082954254cdba40fc9c07d0a5b258c32ae06f0d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf80b780dbd1e39b23cccb082954254cdba40fc9c07d0a5b258c32ae06f0d70->enter($__internal_caf80b780dbd1e39b23cccb082954254cdba40fc9c07d0a5b258c32ae06f0d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_425bbfc3ce16c4b70499c555f0b8f06cc3cd83f4e79d7dbaa1478cf483c74aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425bbfc3ce16c4b70499c555f0b8f06cc3cd83f4e79d7dbaa1478cf483c74aea->enter($__internal_425bbfc3ce16c4b70499c555f0b8f06cc3cd83f4e79d7dbaa1478cf483c74aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf80b780dbd1e39b23cccb082954254cdba40fc9c07d0a5b258c32ae06f0d70->leave($__internal_caf80b780dbd1e39b23cccb082954254cdba40fc9c07d0a5b258c32ae06f0d70_prof);

        
        $__internal_425bbfc3ce16c4b70499c555f0b8f06cc3cd83f4e79d7dbaa1478cf483c74aea->leave($__internal_425bbfc3ce16c4b70499c555f0b8f06cc3cd83f4e79d7dbaa1478cf483c74aea_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_2caf2c1bf25bf2b2c9e968667e19a3e78ff6b9f6539432763518b72a494f9d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2caf2c1bf25bf2b2c9e968667e19a3e78ff6b9f6539432763518b72a494f9d32->enter($__internal_2caf2c1bf25bf2b2c9e968667e19a3e78ff6b9f6539432763518b72a494f9d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_016757f057a658d4eaf34e0c650ddfabb2be80dd8db4bb3550d6a187fa84c0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016757f057a658d4eaf34e0c650ddfabb2be80dd8db4bb3550d6a187fa84c0ac->enter($__internal_016757f057a658d4eaf34e0c650ddfabb2be80dd8db4bb3550d6a187fa84c0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo "   
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $this->displayBlock('Content', $context, $blocks);
        
        $__internal_016757f057a658d4eaf34e0c650ddfabb2be80dd8db4bb3550d6a187fa84c0ac->leave($__internal_016757f057a658d4eaf34e0c650ddfabb2be80dd8db4bb3550d6a187fa84c0ac_prof);

        
        $__internal_2caf2c1bf25bf2b2c9e968667e19a3e78ff6b9f6539432763518b72a494f9d32->leave($__internal_2caf2c1bf25bf2b2c9e968667e19a3e78ff6b9f6539432763518b72a494f9d32_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_c4ba9672eb24a812ec12aaa0931f5cd4aabe1012c5eafcee26fb79ebe36e5d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ba9672eb24a812ec12aaa0931f5cd4aabe1012c5eafcee26fb79ebe36e5d3f->enter($__internal_c4ba9672eb24a812ec12aaa0931f5cd4aabe1012c5eafcee26fb79ebe36e5d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_50c990156a476f60f2501aee043688f90cd7c30992f108df5bdee18705478373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c990156a476f60f2501aee043688f90cd7c30992f108df5bdee18705478373->enter($__internal_50c990156a476f60f2501aee043688f90cd7c30992f108df5bdee18705478373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_50c990156a476f60f2501aee043688f90cd7c30992f108df5bdee18705478373->leave($__internal_50c990156a476f60f2501aee043688f90cd7c30992f108df5bdee18705478373_prof);

        
        $__internal_c4ba9672eb24a812ec12aaa0931f5cd4aabe1012c5eafcee26fb79ebe36e5d3f->leave($__internal_c4ba9672eb24a812ec12aaa0931f5cd4aabe1012c5eafcee26fb79ebe36e5d3f_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d279d59644224066991cd9f86ab6c2a0f43e91f92c1e2446099fa8733f0939a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d279d59644224066991cd9f86ab6c2a0f43e91f92c1e2446099fa8733f0939a->enter($__internal_0d279d59644224066991cd9f86ab6c2a0f43e91f92c1e2446099fa8733f0939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d62d59fc5da838e287c1b30d3bad06f66c7ad2673b68dc31f1a9e3210220990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d62d59fc5da838e287c1b30d3bad06f66c7ad2673b68dc31f1a9e3210220990->enter($__internal_8d62d59fc5da838e287c1b30d3bad06f66c7ad2673b68dc31f1a9e3210220990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_8d62d59fc5da838e287c1b30d3bad06f66c7ad2673b68dc31f1a9e3210220990->leave($__internal_8d62d59fc5da838e287c1b30d3bad06f66c7ad2673b68dc31f1a9e3210220990_prof);

        
        $__internal_0d279d59644224066991cd9f86ab6c2a0f43e91f92c1e2446099fa8733f0939a->leave($__internal_0d279d59644224066991cd9f86ab6c2a0f43e91f92c1e2446099fa8733f0939a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 17,  124 => 16,  114 => 19,  112 => 16,  91 => 15,  88 => 13,  85 => 12,  79 => 11,  70 => 8,  65 => 7,  60 => 6,  55 => 5,  53 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block Body %}   
    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block Content %} 
        {% block fos_user_content %}

        {% endblock fos_user_content %}
    {% endblock %}
{% endblock %}



{#
<div>
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
<a href=\"{{ path('fos_user_security_logout') }}\">
{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
</a>
{% else %}
<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
{% endif %}
</div>
#}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
