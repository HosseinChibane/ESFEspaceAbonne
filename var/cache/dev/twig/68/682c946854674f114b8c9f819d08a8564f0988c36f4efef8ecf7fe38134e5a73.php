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
        $__internal_b6710d5b0890bade7ca8c823410a97c76bb94e3b4ebdf2d633a7c513cb54826c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6710d5b0890bade7ca8c823410a97c76bb94e3b4ebdf2d633a7c513cb54826c->enter($__internal_b6710d5b0890bade7ca8c823410a97c76bb94e3b4ebdf2d633a7c513cb54826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_7f35985cf698ad89e0e1ecc6265241a667047db07c04bdf0911a6341d347e7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f35985cf698ad89e0e1ecc6265241a667047db07c04bdf0911a6341d347e7e8->enter($__internal_7f35985cf698ad89e0e1ecc6265241a667047db07c04bdf0911a6341d347e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6710d5b0890bade7ca8c823410a97c76bb94e3b4ebdf2d633a7c513cb54826c->leave($__internal_b6710d5b0890bade7ca8c823410a97c76bb94e3b4ebdf2d633a7c513cb54826c_prof);

        
        $__internal_7f35985cf698ad89e0e1ecc6265241a667047db07c04bdf0911a6341d347e7e8->leave($__internal_7f35985cf698ad89e0e1ecc6265241a667047db07c04bdf0911a6341d347e7e8_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_d38fbd0e20cdbd547895c1c40511a743181078390a9eaf1332824ed6fb589a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38fbd0e20cdbd547895c1c40511a743181078390a9eaf1332824ed6fb589a15->enter($__internal_d38fbd0e20cdbd547895c1c40511a743181078390a9eaf1332824ed6fb589a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_8c8098348a689ed42ca1e47dd8addbf64637a5e9f9789b28f9357a9440128a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8098348a689ed42ca1e47dd8addbf64637a5e9f9789b28f9357a9440128a3d->enter($__internal_8c8098348a689ed42ca1e47dd8addbf64637a5e9f9789b28f9357a9440128a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_8c8098348a689ed42ca1e47dd8addbf64637a5e9f9789b28f9357a9440128a3d->leave($__internal_8c8098348a689ed42ca1e47dd8addbf64637a5e9f9789b28f9357a9440128a3d_prof);

        
        $__internal_d38fbd0e20cdbd547895c1c40511a743181078390a9eaf1332824ed6fb589a15->leave($__internal_d38fbd0e20cdbd547895c1c40511a743181078390a9eaf1332824ed6fb589a15_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_e95e8151fa7b83365282b2257a2e379fa09e4ed4209a2fdda810fd193f39411b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95e8151fa7b83365282b2257a2e379fa09e4ed4209a2fdda810fd193f39411b->enter($__internal_e95e8151fa7b83365282b2257a2e379fa09e4ed4209a2fdda810fd193f39411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c011a2bd1a1a4669bcee559702d487db161121b582009c2ca7db1f054de2bafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c011a2bd1a1a4669bcee559702d487db161121b582009c2ca7db1f054de2bafe->enter($__internal_c011a2bd1a1a4669bcee559702d487db161121b582009c2ca7db1f054de2bafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_c011a2bd1a1a4669bcee559702d487db161121b582009c2ca7db1f054de2bafe->leave($__internal_c011a2bd1a1a4669bcee559702d487db161121b582009c2ca7db1f054de2bafe_prof);

        
        $__internal_e95e8151fa7b83365282b2257a2e379fa09e4ed4209a2fdda810fd193f39411b->leave($__internal_e95e8151fa7b83365282b2257a2e379fa09e4ed4209a2fdda810fd193f39411b_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3df9e54f4aa48005509752d5df1f1a56972f7f57a4b5df4c8db579f4967d1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3df9e54f4aa48005509752d5df1f1a56972f7f57a4b5df4c8db579f4967d1e4->enter($__internal_a3df9e54f4aa48005509752d5df1f1a56972f7f57a4b5df4c8db579f4967d1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_795540904a03e8c2ece7452d709899e3fe08b9182fe5f1d3b2354613bf296863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795540904a03e8c2ece7452d709899e3fe08b9182fe5f1d3b2354613bf296863->enter($__internal_795540904a03e8c2ece7452d709899e3fe08b9182fe5f1d3b2354613bf296863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_795540904a03e8c2ece7452d709899e3fe08b9182fe5f1d3b2354613bf296863->leave($__internal_795540904a03e8c2ece7452d709899e3fe08b9182fe5f1d3b2354613bf296863_prof);

        
        $__internal_a3df9e54f4aa48005509752d5df1f1a56972f7f57a4b5df4c8db579f4967d1e4->leave($__internal_a3df9e54f4aa48005509752d5df1f1a56972f7f57a4b5df4c8db579f4967d1e4_prof);

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
