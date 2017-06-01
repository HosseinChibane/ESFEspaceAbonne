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
        $__internal_4ec0982c4be7858509d0978df6dd27e46f9332f1be25e389d521e97bbba27984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec0982c4be7858509d0978df6dd27e46f9332f1be25e389d521e97bbba27984->enter($__internal_4ec0982c4be7858509d0978df6dd27e46f9332f1be25e389d521e97bbba27984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_8bfd169b668c0d61968dc1d076309c11bbc567d48c2e64a541bb8e239ffd44a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfd169b668c0d61968dc1d076309c11bbc567d48c2e64a541bb8e239ffd44a3->enter($__internal_8bfd169b668c0d61968dc1d076309c11bbc567d48c2e64a541bb8e239ffd44a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec0982c4be7858509d0978df6dd27e46f9332f1be25e389d521e97bbba27984->leave($__internal_4ec0982c4be7858509d0978df6dd27e46f9332f1be25e389d521e97bbba27984_prof);

        
        $__internal_8bfd169b668c0d61968dc1d076309c11bbc567d48c2e64a541bb8e239ffd44a3->leave($__internal_8bfd169b668c0d61968dc1d076309c11bbc567d48c2e64a541bb8e239ffd44a3_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_e41906f8d1757697f5b239187b89af05b86ca83c5c34b0a6aa7df47b55f433ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41906f8d1757697f5b239187b89af05b86ca83c5c34b0a6aa7df47b55f433ea->enter($__internal_e41906f8d1757697f5b239187b89af05b86ca83c5c34b0a6aa7df47b55f433ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_2060912d2d08cdecc01f13aa6207f613257a5de0ce7c06c6aacb9a996a7c3ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2060912d2d08cdecc01f13aa6207f613257a5de0ce7c06c6aacb9a996a7c3ce5->enter($__internal_2060912d2d08cdecc01f13aa6207f613257a5de0ce7c06c6aacb9a996a7c3ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_2060912d2d08cdecc01f13aa6207f613257a5de0ce7c06c6aacb9a996a7c3ce5->leave($__internal_2060912d2d08cdecc01f13aa6207f613257a5de0ce7c06c6aacb9a996a7c3ce5_prof);

        
        $__internal_e41906f8d1757697f5b239187b89af05b86ca83c5c34b0a6aa7df47b55f433ea->leave($__internal_e41906f8d1757697f5b239187b89af05b86ca83c5c34b0a6aa7df47b55f433ea_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_5ddf04d87b2a784effda12455cd183a5462688e68e6fc8d674c68420e9b97241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddf04d87b2a784effda12455cd183a5462688e68e6fc8d674c68420e9b97241->enter($__internal_5ddf04d87b2a784effda12455cd183a5462688e68e6fc8d674c68420e9b97241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_39908dc851fa227854e6aada8bca49a384c62db91d2ab21dd4ddb97bca23cfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39908dc851fa227854e6aada8bca49a384c62db91d2ab21dd4ddb97bca23cfd3->enter($__internal_39908dc851fa227854e6aada8bca49a384c62db91d2ab21dd4ddb97bca23cfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_39908dc851fa227854e6aada8bca49a384c62db91d2ab21dd4ddb97bca23cfd3->leave($__internal_39908dc851fa227854e6aada8bca49a384c62db91d2ab21dd4ddb97bca23cfd3_prof);

        
        $__internal_5ddf04d87b2a784effda12455cd183a5462688e68e6fc8d674c68420e9b97241->leave($__internal_5ddf04d87b2a784effda12455cd183a5462688e68e6fc8d674c68420e9b97241_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c78f5104a5d185626099edc895cb421194ab5b3cbdf0e1040652b53a1570953c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78f5104a5d185626099edc895cb421194ab5b3cbdf0e1040652b53a1570953c->enter($__internal_c78f5104a5d185626099edc895cb421194ab5b3cbdf0e1040652b53a1570953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62afbffb95b6b26bf201895b0c9c3404a82487165f808a9fe0cdeb9338c12ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62afbffb95b6b26bf201895b0c9c3404a82487165f808a9fe0cdeb9338c12ddd->enter($__internal_62afbffb95b6b26bf201895b0c9c3404a82487165f808a9fe0cdeb9338c12ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_62afbffb95b6b26bf201895b0c9c3404a82487165f808a9fe0cdeb9338c12ddd->leave($__internal_62afbffb95b6b26bf201895b0c9c3404a82487165f808a9fe0cdeb9338c12ddd_prof);

        
        $__internal_c78f5104a5d185626099edc895cb421194ab5b3cbdf0e1040652b53a1570953c->leave($__internal_c78f5104a5d185626099edc895cb421194ab5b3cbdf0e1040652b53a1570953c_prof);

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
