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
        $__internal_eaa9decc1c4bfab308ffd5fba90a225af3298203f8acb002a2c3015b61e113ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa9decc1c4bfab308ffd5fba90a225af3298203f8acb002a2c3015b61e113ea->enter($__internal_eaa9decc1c4bfab308ffd5fba90a225af3298203f8acb002a2c3015b61e113ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_95661d6dfc3304501cac551bebcc27eaf85304d60591d0d2d260e350cf19047d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95661d6dfc3304501cac551bebcc27eaf85304d60591d0d2d260e350cf19047d->enter($__internal_95661d6dfc3304501cac551bebcc27eaf85304d60591d0d2d260e350cf19047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa9decc1c4bfab308ffd5fba90a225af3298203f8acb002a2c3015b61e113ea->leave($__internal_eaa9decc1c4bfab308ffd5fba90a225af3298203f8acb002a2c3015b61e113ea_prof);

        
        $__internal_95661d6dfc3304501cac551bebcc27eaf85304d60591d0d2d260e350cf19047d->leave($__internal_95661d6dfc3304501cac551bebcc27eaf85304d60591d0d2d260e350cf19047d_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_61548e0a03eae2901ca76b7fb07e39350cedae2ab55169b437b84886b8e64fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61548e0a03eae2901ca76b7fb07e39350cedae2ab55169b437b84886b8e64fa6->enter($__internal_61548e0a03eae2901ca76b7fb07e39350cedae2ab55169b437b84886b8e64fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_c8226b9d4bbbd1c72da0db89efc5eb61a84d6da21724ece46007ff450eea5a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8226b9d4bbbd1c72da0db89efc5eb61a84d6da21724ece46007ff450eea5a77->enter($__internal_c8226b9d4bbbd1c72da0db89efc5eb61a84d6da21724ece46007ff450eea5a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_c8226b9d4bbbd1c72da0db89efc5eb61a84d6da21724ece46007ff450eea5a77->leave($__internal_c8226b9d4bbbd1c72da0db89efc5eb61a84d6da21724ece46007ff450eea5a77_prof);

        
        $__internal_61548e0a03eae2901ca76b7fb07e39350cedae2ab55169b437b84886b8e64fa6->leave($__internal_61548e0a03eae2901ca76b7fb07e39350cedae2ab55169b437b84886b8e64fa6_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_13dff94927dd383aa34b11a2dde59aff7ce1dc496653616a2bb81f4bca897080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13dff94927dd383aa34b11a2dde59aff7ce1dc496653616a2bb81f4bca897080->enter($__internal_13dff94927dd383aa34b11a2dde59aff7ce1dc496653616a2bb81f4bca897080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_557efd8f52180189d7c00023662c95fde57a20b2d09586497bb618019a9daae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557efd8f52180189d7c00023662c95fde57a20b2d09586497bb618019a9daae2->enter($__internal_557efd8f52180189d7c00023662c95fde57a20b2d09586497bb618019a9daae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_557efd8f52180189d7c00023662c95fde57a20b2d09586497bb618019a9daae2->leave($__internal_557efd8f52180189d7c00023662c95fde57a20b2d09586497bb618019a9daae2_prof);

        
        $__internal_13dff94927dd383aa34b11a2dde59aff7ce1dc496653616a2bb81f4bca897080->leave($__internal_13dff94927dd383aa34b11a2dde59aff7ce1dc496653616a2bb81f4bca897080_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6e740bc39887fa587577f210d61a245237b2b8220be63b6bede8fbb9142d62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e740bc39887fa587577f210d61a245237b2b8220be63b6bede8fbb9142d62c->enter($__internal_f6e740bc39887fa587577f210d61a245237b2b8220be63b6bede8fbb9142d62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0de86d796a25fcd39db2ae7422c4de8bced30bc94d9b9643e27df45f9e5dac06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de86d796a25fcd39db2ae7422c4de8bced30bc94d9b9643e27df45f9e5dac06->enter($__internal_0de86d796a25fcd39db2ae7422c4de8bced30bc94d9b9643e27df45f9e5dac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_0de86d796a25fcd39db2ae7422c4de8bced30bc94d9b9643e27df45f9e5dac06->leave($__internal_0de86d796a25fcd39db2ae7422c4de8bced30bc94d9b9643e27df45f9e5dac06_prof);

        
        $__internal_f6e740bc39887fa587577f210d61a245237b2b8220be63b6bede8fbb9142d62c->leave($__internal_f6e740bc39887fa587577f210d61a245237b2b8220be63b6bede8fbb9142d62c_prof);

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
