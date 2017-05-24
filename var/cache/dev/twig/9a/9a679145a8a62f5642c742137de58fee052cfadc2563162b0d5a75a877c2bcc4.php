<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8dd9011597bdc0836a50325b02bbd503c4c4c6193175fcb2a4fe7339d8ce1bad extends Twig_Template
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
        $__internal_c787b93d2677d6221641a37146106ac166d356a084afb1922ac086185d84ba0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c787b93d2677d6221641a37146106ac166d356a084afb1922ac086185d84ba0e->enter($__internal_c787b93d2677d6221641a37146106ac166d356a084afb1922ac086185d84ba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e3ae8b776908add0ac30c3b6b1ba65b3abe756704280ffd0034b5350dcb14b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ae8b776908add0ac30c3b6b1ba65b3abe756704280ffd0034b5350dcb14b22->enter($__internal_e3ae8b776908add0ac30c3b6b1ba65b3abe756704280ffd0034b5350dcb14b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c787b93d2677d6221641a37146106ac166d356a084afb1922ac086185d84ba0e->leave($__internal_c787b93d2677d6221641a37146106ac166d356a084afb1922ac086185d84ba0e_prof);

        
        $__internal_e3ae8b776908add0ac30c3b6b1ba65b3abe756704280ffd0034b5350dcb14b22->leave($__internal_e3ae8b776908add0ac30c3b6b1ba65b3abe756704280ffd0034b5350dcb14b22_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_defc3e83284113cfe579cabd52e6c8fa37d28dc31a5fc8489d7938a5a4a0e73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defc3e83284113cfe579cabd52e6c8fa37d28dc31a5fc8489d7938a5a4a0e73a->enter($__internal_defc3e83284113cfe579cabd52e6c8fa37d28dc31a5fc8489d7938a5a4a0e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_0bd2a5a80df199e681c6a912a5c3bea611e9dab7e2e07a8b39075c70263c7817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd2a5a80df199e681c6a912a5c3bea611e9dab7e2e07a8b39075c70263c7817->enter($__internal_0bd2a5a80df199e681c6a912a5c3bea611e9dab7e2e07a8b39075c70263c7817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_0bd2a5a80df199e681c6a912a5c3bea611e9dab7e2e07a8b39075c70263c7817->leave($__internal_0bd2a5a80df199e681c6a912a5c3bea611e9dab7e2e07a8b39075c70263c7817_prof);

        
        $__internal_defc3e83284113cfe579cabd52e6c8fa37d28dc31a5fc8489d7938a5a4a0e73a->leave($__internal_defc3e83284113cfe579cabd52e6c8fa37d28dc31a5fc8489d7938a5a4a0e73a_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_3945fbad1096dcd46e8a5a2208f1d3032f906d4b92a7601e2ad0b059576aecc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3945fbad1096dcd46e8a5a2208f1d3032f906d4b92a7601e2ad0b059576aecc1->enter($__internal_3945fbad1096dcd46e8a5a2208f1d3032f906d4b92a7601e2ad0b059576aecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_184144ef5b4c8a4b131f30e2aa6062097f0e5ab813cafc5d273e39c71f26584a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184144ef5b4c8a4b131f30e2aa6062097f0e5ab813cafc5d273e39c71f26584a->enter($__internal_184144ef5b4c8a4b131f30e2aa6062097f0e5ab813cafc5d273e39c71f26584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_184144ef5b4c8a4b131f30e2aa6062097f0e5ab813cafc5d273e39c71f26584a->leave($__internal_184144ef5b4c8a4b131f30e2aa6062097f0e5ab813cafc5d273e39c71f26584a_prof);

        
        $__internal_3945fbad1096dcd46e8a5a2208f1d3032f906d4b92a7601e2ad0b059576aecc1->leave($__internal_3945fbad1096dcd46e8a5a2208f1d3032f906d4b92a7601e2ad0b059576aecc1_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46134e7cc28899c88614e724db6759b4aa88c8ebd695d2cd6fb8da4da3e221ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46134e7cc28899c88614e724db6759b4aa88c8ebd695d2cd6fb8da4da3e221ea->enter($__internal_46134e7cc28899c88614e724db6759b4aa88c8ebd695d2cd6fb8da4da3e221ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7fbd3d0858450fe4c4b11d9480e8c5c51ba83c9629c0f20167e35724c6884cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fbd3d0858450fe4c4b11d9480e8c5c51ba83c9629c0f20167e35724c6884cd->enter($__internal_e7fbd3d0858450fe4c4b11d9480e8c5c51ba83c9629c0f20167e35724c6884cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_e7fbd3d0858450fe4c4b11d9480e8c5c51ba83c9629c0f20167e35724c6884cd->leave($__internal_e7fbd3d0858450fe4c4b11d9480e8c5c51ba83c9629c0f20167e35724c6884cd_prof);

        
        $__internal_46134e7cc28899c88614e724db6759b4aa88c8ebd695d2cd6fb8da4da3e221ea->leave($__internal_46134e7cc28899c88614e724db6759b4aa88c8ebd695d2cd6fb8da4da3e221ea_prof);

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
