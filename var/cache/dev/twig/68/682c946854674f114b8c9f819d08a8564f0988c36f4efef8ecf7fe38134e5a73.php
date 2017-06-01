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
        $__internal_4c78a55aa60a40b2a08e6d48ed7e6d8ef6afbe2f3b6a781c9d91ea08d38c2278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c78a55aa60a40b2a08e6d48ed7e6d8ef6afbe2f3b6a781c9d91ea08d38c2278->enter($__internal_4c78a55aa60a40b2a08e6d48ed7e6d8ef6afbe2f3b6a781c9d91ea08d38c2278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_cd569342782116da6389a9eaa920f1997631dc9ba4fc77c72a7e49e0b0670567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd569342782116da6389a9eaa920f1997631dc9ba4fc77c72a7e49e0b0670567->enter($__internal_cd569342782116da6389a9eaa920f1997631dc9ba4fc77c72a7e49e0b0670567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c78a55aa60a40b2a08e6d48ed7e6d8ef6afbe2f3b6a781c9d91ea08d38c2278->leave($__internal_4c78a55aa60a40b2a08e6d48ed7e6d8ef6afbe2f3b6a781c9d91ea08d38c2278_prof);

        
        $__internal_cd569342782116da6389a9eaa920f1997631dc9ba4fc77c72a7e49e0b0670567->leave($__internal_cd569342782116da6389a9eaa920f1997631dc9ba4fc77c72a7e49e0b0670567_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_9e7caa7916ea7148775f7f775f153d68411f6c2d094612380f83af4274c30924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7caa7916ea7148775f7f775f153d68411f6c2d094612380f83af4274c30924->enter($__internal_9e7caa7916ea7148775f7f775f153d68411f6c2d094612380f83af4274c30924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_a5364ee60f75c63506a3d6ee3e996889120a7f0e97be65115e4ecec4f2673974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5364ee60f75c63506a3d6ee3e996889120a7f0e97be65115e4ecec4f2673974->enter($__internal_a5364ee60f75c63506a3d6ee3e996889120a7f0e97be65115e4ecec4f2673974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_a5364ee60f75c63506a3d6ee3e996889120a7f0e97be65115e4ecec4f2673974->leave($__internal_a5364ee60f75c63506a3d6ee3e996889120a7f0e97be65115e4ecec4f2673974_prof);

        
        $__internal_9e7caa7916ea7148775f7f775f153d68411f6c2d094612380f83af4274c30924->leave($__internal_9e7caa7916ea7148775f7f775f153d68411f6c2d094612380f83af4274c30924_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_46fbcb9fb5fcdcbc5168f8ef437b58bbbaadcf9b698d79ca14c51bb739d6f201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fbcb9fb5fcdcbc5168f8ef437b58bbbaadcf9b698d79ca14c51bb739d6f201->enter($__internal_46fbcb9fb5fcdcbc5168f8ef437b58bbbaadcf9b698d79ca14c51bb739d6f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d493d494df8fde0f58fad005df0e4611f77ab69b17c6d5146160885fd7e870a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d493d494df8fde0f58fad005df0e4611f77ab69b17c6d5146160885fd7e870a5->enter($__internal_d493d494df8fde0f58fad005df0e4611f77ab69b17c6d5146160885fd7e870a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_d493d494df8fde0f58fad005df0e4611f77ab69b17c6d5146160885fd7e870a5->leave($__internal_d493d494df8fde0f58fad005df0e4611f77ab69b17c6d5146160885fd7e870a5_prof);

        
        $__internal_46fbcb9fb5fcdcbc5168f8ef437b58bbbaadcf9b698d79ca14c51bb739d6f201->leave($__internal_46fbcb9fb5fcdcbc5168f8ef437b58bbbaadcf9b698d79ca14c51bb739d6f201_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e99fbeee63e91b84d9bc6dc962ea51cf1fe45f6cf8dcc39385c7cc5968e7ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e99fbeee63e91b84d9bc6dc962ea51cf1fe45f6cf8dcc39385c7cc5968e7ff6->enter($__internal_3e99fbeee63e91b84d9bc6dc962ea51cf1fe45f6cf8dcc39385c7cc5968e7ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ead32d66c1c8b1d5be12a51aaafca53d7622bb8267eba98e295459fdab53ba20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead32d66c1c8b1d5be12a51aaafca53d7622bb8267eba98e295459fdab53ba20->enter($__internal_ead32d66c1c8b1d5be12a51aaafca53d7622bb8267eba98e295459fdab53ba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_ead32d66c1c8b1d5be12a51aaafca53d7622bb8267eba98e295459fdab53ba20->leave($__internal_ead32d66c1c8b1d5be12a51aaafca53d7622bb8267eba98e295459fdab53ba20_prof);

        
        $__internal_3e99fbeee63e91b84d9bc6dc962ea51cf1fe45f6cf8dcc39385c7cc5968e7ff6->leave($__internal_3e99fbeee63e91b84d9bc6dc962ea51cf1fe45f6cf8dcc39385c7cc5968e7ff6_prof);

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
