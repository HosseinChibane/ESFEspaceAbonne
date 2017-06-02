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
        $__internal_11c9539775496da0d157d5c3f859916c5560f3874663b3887bf1ceeabb07deea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c9539775496da0d157d5c3f859916c5560f3874663b3887bf1ceeabb07deea->enter($__internal_11c9539775496da0d157d5c3f859916c5560f3874663b3887bf1ceeabb07deea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_95fe561a02903c70db976a2fb8ccb41e099d296e86fd8c421d51e89d01571e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fe561a02903c70db976a2fb8ccb41e099d296e86fd8c421d51e89d01571e76->enter($__internal_95fe561a02903c70db976a2fb8ccb41e099d296e86fd8c421d51e89d01571e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c9539775496da0d157d5c3f859916c5560f3874663b3887bf1ceeabb07deea->leave($__internal_11c9539775496da0d157d5c3f859916c5560f3874663b3887bf1ceeabb07deea_prof);

        
        $__internal_95fe561a02903c70db976a2fb8ccb41e099d296e86fd8c421d51e89d01571e76->leave($__internal_95fe561a02903c70db976a2fb8ccb41e099d296e86fd8c421d51e89d01571e76_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_b45f769aa51c4e60e8c46ef48a034a37fd5265febeabe5112a72cdf634e98521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45f769aa51c4e60e8c46ef48a034a37fd5265febeabe5112a72cdf634e98521->enter($__internal_b45f769aa51c4e60e8c46ef48a034a37fd5265febeabe5112a72cdf634e98521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_11f35174b51ad48c8b4ba5f5ae6e2de33c24d9d79396ed8d6898c9f3ce8d2519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f35174b51ad48c8b4ba5f5ae6e2de33c24d9d79396ed8d6898c9f3ce8d2519->enter($__internal_11f35174b51ad48c8b4ba5f5ae6e2de33c24d9d79396ed8d6898c9f3ce8d2519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_11f35174b51ad48c8b4ba5f5ae6e2de33c24d9d79396ed8d6898c9f3ce8d2519->leave($__internal_11f35174b51ad48c8b4ba5f5ae6e2de33c24d9d79396ed8d6898c9f3ce8d2519_prof);

        
        $__internal_b45f769aa51c4e60e8c46ef48a034a37fd5265febeabe5112a72cdf634e98521->leave($__internal_b45f769aa51c4e60e8c46ef48a034a37fd5265febeabe5112a72cdf634e98521_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_3ce67e3d8ce1734bfa7f213a41e4da2912890f762c57d39fafd1c4766dcb2e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce67e3d8ce1734bfa7f213a41e4da2912890f762c57d39fafd1c4766dcb2e96->enter($__internal_3ce67e3d8ce1734bfa7f213a41e4da2912890f762c57d39fafd1c4766dcb2e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0a0cd137cdc40d95508816e7d6a3fefc912aabd45eb43e1072e2834f03877b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0cd137cdc40d95508816e7d6a3fefc912aabd45eb43e1072e2834f03877b8c->enter($__internal_0a0cd137cdc40d95508816e7d6a3fefc912aabd45eb43e1072e2834f03877b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_0a0cd137cdc40d95508816e7d6a3fefc912aabd45eb43e1072e2834f03877b8c->leave($__internal_0a0cd137cdc40d95508816e7d6a3fefc912aabd45eb43e1072e2834f03877b8c_prof);

        
        $__internal_3ce67e3d8ce1734bfa7f213a41e4da2912890f762c57d39fafd1c4766dcb2e96->leave($__internal_3ce67e3d8ce1734bfa7f213a41e4da2912890f762c57d39fafd1c4766dcb2e96_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5bf9fa4b71838239e748269fb990b5929da289d06d74d5a98f5df9443b6794b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bf9fa4b71838239e748269fb990b5929da289d06d74d5a98f5df9443b6794b->enter($__internal_a5bf9fa4b71838239e748269fb990b5929da289d06d74d5a98f5df9443b6794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d512f9a4bf5eac177daf2e3687501464b255a58890ccbdaa12e34f234cca2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d512f9a4bf5eac177daf2e3687501464b255a58890ccbdaa12e34f234cca2a1->enter($__internal_3d512f9a4bf5eac177daf2e3687501464b255a58890ccbdaa12e34f234cca2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_3d512f9a4bf5eac177daf2e3687501464b255a58890ccbdaa12e34f234cca2a1->leave($__internal_3d512f9a4bf5eac177daf2e3687501464b255a58890ccbdaa12e34f234cca2a1_prof);

        
        $__internal_a5bf9fa4b71838239e748269fb990b5929da289d06d74d5a98f5df9443b6794b->leave($__internal_a5bf9fa4b71838239e748269fb990b5929da289d06d74d5a98f5df9443b6794b_prof);

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
