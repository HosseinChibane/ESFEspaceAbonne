<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_fcba1c26f6ae387bf09d73cd4a85b7d55ea57f963250dad77b56f4bcf9825193 extends Twig_Template
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
        $__internal_89154a19936333a216019887e2233cbfbd8d71217da64ea0ea0bbe24ec5fd6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89154a19936333a216019887e2233cbfbd8d71217da64ea0ea0bbe24ec5fd6a0->enter($__internal_89154a19936333a216019887e2233cbfbd8d71217da64ea0ea0bbe24ec5fd6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_0226d8d17a03695a20d0ca6c2da39428e14a87766514f8c5fe6ff25638067d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0226d8d17a03695a20d0ca6c2da39428e14a87766514f8c5fe6ff25638067d19->enter($__internal_0226d8d17a03695a20d0ca6c2da39428e14a87766514f8c5fe6ff25638067d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89154a19936333a216019887e2233cbfbd8d71217da64ea0ea0bbe24ec5fd6a0->leave($__internal_89154a19936333a216019887e2233cbfbd8d71217da64ea0ea0bbe24ec5fd6a0_prof);

        
        $__internal_0226d8d17a03695a20d0ca6c2da39428e14a87766514f8c5fe6ff25638067d19->leave($__internal_0226d8d17a03695a20d0ca6c2da39428e14a87766514f8c5fe6ff25638067d19_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_c72bf4a3a1b3df1c37a452ae8ede6170d5bc76461b1c794bae3648b861a81045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72bf4a3a1b3df1c37a452ae8ede6170d5bc76461b1c794bae3648b861a81045->enter($__internal_c72bf4a3a1b3df1c37a452ae8ede6170d5bc76461b1c794bae3648b861a81045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_7240deb1f689824fc71eb7d0cf8d99dfa2f2767b7d12e7278dc102de56c7ccb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7240deb1f689824fc71eb7d0cf8d99dfa2f2767b7d12e7278dc102de56c7ccb2->enter($__internal_7240deb1f689824fc71eb7d0cf8d99dfa2f2767b7d12e7278dc102de56c7ccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_7240deb1f689824fc71eb7d0cf8d99dfa2f2767b7d12e7278dc102de56c7ccb2->leave($__internal_7240deb1f689824fc71eb7d0cf8d99dfa2f2767b7d12e7278dc102de56c7ccb2_prof);

        
        $__internal_c72bf4a3a1b3df1c37a452ae8ede6170d5bc76461b1c794bae3648b861a81045->leave($__internal_c72bf4a3a1b3df1c37a452ae8ede6170d5bc76461b1c794bae3648b861a81045_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_56613e254927b3795a2c0d53deff7f63dacad4e478c9ff60616e61414860e81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56613e254927b3795a2c0d53deff7f63dacad4e478c9ff60616e61414860e81b->enter($__internal_56613e254927b3795a2c0d53deff7f63dacad4e478c9ff60616e61414860e81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2aea7709ead3402f7f24c5de6dafd1a5834f960b7cb85bdccf74cf036d0244a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aea7709ead3402f7f24c5de6dafd1a5834f960b7cb85bdccf74cf036d0244a6->enter($__internal_2aea7709ead3402f7f24c5de6dafd1a5834f960b7cb85bdccf74cf036d0244a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_2aea7709ead3402f7f24c5de6dafd1a5834f960b7cb85bdccf74cf036d0244a6->leave($__internal_2aea7709ead3402f7f24c5de6dafd1a5834f960b7cb85bdccf74cf036d0244a6_prof);

        
        $__internal_56613e254927b3795a2c0d53deff7f63dacad4e478c9ff60616e61414860e81b->leave($__internal_56613e254927b3795a2c0d53deff7f63dacad4e478c9ff60616e61414860e81b_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1892dc7cd38a089dff11c0d94b74fbbc5e32ab65f13389adb51bcdbfe55396e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1892dc7cd38a089dff11c0d94b74fbbc5e32ab65f13389adb51bcdbfe55396e->enter($__internal_d1892dc7cd38a089dff11c0d94b74fbbc5e32ab65f13389adb51bcdbfe55396e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_739e615de8141ae6aa68c746639ffc97563c466ef73ea6db732674eb25a43b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739e615de8141ae6aa68c746639ffc97563c466ef73ea6db732674eb25a43b11->enter($__internal_739e615de8141ae6aa68c746639ffc97563c466ef73ea6db732674eb25a43b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_739e615de8141ae6aa68c746639ffc97563c466ef73ea6db732674eb25a43b11->leave($__internal_739e615de8141ae6aa68c746639ffc97563c466ef73ea6db732674eb25a43b11_prof);

        
        $__internal_d1892dc7cd38a089dff11c0d94b74fbbc5e32ab65f13389adb51bcdbfe55396e->leave($__internal_d1892dc7cd38a089dff11c0d94b74fbbc5e32ab65f13389adb51bcdbfe55396e_prof);

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
