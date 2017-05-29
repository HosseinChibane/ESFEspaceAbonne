<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_fe7649b1e1325ecf9ffcd067bf56b50475a32a0623be3fddf829fb80f229545f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_e912c01a6391bc81c9b85da73ebae0060c77e50341fe77b4a71af299f8b47cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e912c01a6391bc81c9b85da73ebae0060c77e50341fe77b4a71af299f8b47cad->enter($__internal_e912c01a6391bc81c9b85da73ebae0060c77e50341fe77b4a71af299f8b47cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_9eb4b91955d1d16ad69869a0ef81a3a1181c3cef47860aa9b1a765eafa59293b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb4b91955d1d16ad69869a0ef81a3a1181c3cef47860aa9b1a765eafa59293b->enter($__internal_9eb4b91955d1d16ad69869a0ef81a3a1181c3cef47860aa9b1a765eafa59293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e912c01a6391bc81c9b85da73ebae0060c77e50341fe77b4a71af299f8b47cad->leave($__internal_e912c01a6391bc81c9b85da73ebae0060c77e50341fe77b4a71af299f8b47cad_prof);

        
        $__internal_9eb4b91955d1d16ad69869a0ef81a3a1181c3cef47860aa9b1a765eafa59293b->leave($__internal_9eb4b91955d1d16ad69869a0ef81a3a1181c3cef47860aa9b1a765eafa59293b_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_6826ad4afe9a1d589bef34f80fbdcb9a69a01511e6858095ed665d032841f6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6826ad4afe9a1d589bef34f80fbdcb9a69a01511e6858095ed665d032841f6af->enter($__internal_6826ad4afe9a1d589bef34f80fbdcb9a69a01511e6858095ed665d032841f6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_16d73fe2773f4e9cd9286bbd4ccb3a7c7cde7e5700cdb1797fb3c3be1e05cc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d73fe2773f4e9cd9286bbd4ccb3a7c7cde7e5700cdb1797fb3c3be1e05cc96->enter($__internal_16d73fe2773f4e9cd9286bbd4ccb3a7c7cde7e5700cdb1797fb3c3be1e05cc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_16d73fe2773f4e9cd9286bbd4ccb3a7c7cde7e5700cdb1797fb3c3be1e05cc96->leave($__internal_16d73fe2773f4e9cd9286bbd4ccb3a7c7cde7e5700cdb1797fb3c3be1e05cc96_prof);

        
        $__internal_6826ad4afe9a1d589bef34f80fbdcb9a69a01511e6858095ed665d032841f6af->leave($__internal_6826ad4afe9a1d589bef34f80fbdcb9a69a01511e6858095ed665d032841f6af_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_c5ebb8100b5fd3c2e4637f289ff13ce22cd3c264efb0b58be70c614dbc34ac56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ebb8100b5fd3c2e4637f289ff13ce22cd3c264efb0b58be70c614dbc34ac56->enter($__internal_c5ebb8100b5fd3c2e4637f289ff13ce22cd3c264efb0b58be70c614dbc34ac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_fac0ef582e2e0a276c95695d3a73f24f613e9d3695c0b9970c5ddbbf7db55566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac0ef582e2e0a276c95695d3a73f24f613e9d3695c0b9970c5ddbbf7db55566->enter($__internal_fac0ef582e2e0a276c95695d3a73f24f613e9d3695c0b9970c5ddbbf7db55566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_fac0ef582e2e0a276c95695d3a73f24f613e9d3695c0b9970c5ddbbf7db55566->leave($__internal_fac0ef582e2e0a276c95695d3a73f24f613e9d3695c0b9970c5ddbbf7db55566_prof);

        
        $__internal_c5ebb8100b5fd3c2e4637f289ff13ce22cd3c264efb0b58be70c614dbc34ac56->leave($__internal_c5ebb8100b5fd3c2e4637f289ff13ce22cd3c264efb0b58be70c614dbc34ac56_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68b9d9fb10769fc94a4360030de4fb1ee20c23b3f0e1c8e4cf9aa25c18bd4ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b9d9fb10769fc94a4360030de4fb1ee20c23b3f0e1c8e4cf9aa25c18bd4ac7->enter($__internal_68b9d9fb10769fc94a4360030de4fb1ee20c23b3f0e1c8e4cf9aa25c18bd4ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b018479e3a016500a130e792ce1486d6b2bf90ab1d45bb71b7ba0c31d2a753fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b018479e3a016500a130e792ce1486d6b2bf90ab1d45bb71b7ba0c31d2a753fe->enter($__internal_b018479e3a016500a130e792ce1486d6b2bf90ab1d45bb71b7ba0c31d2a753fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_b018479e3a016500a130e792ce1486d6b2bf90ab1d45bb71b7ba0c31d2a753fe->leave($__internal_b018479e3a016500a130e792ce1486d6b2bf90ab1d45bb71b7ba0c31d2a753fe_prof);

        
        $__internal_68b9d9fb10769fc94a4360030de4fb1ee20c23b3f0e1c8e4cf9aa25c18bd4ac7->leave($__internal_68b9d9fb10769fc94a4360030de4fb1ee20c23b3f0e1c8e4cf9aa25c18bd4ac7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
#}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
