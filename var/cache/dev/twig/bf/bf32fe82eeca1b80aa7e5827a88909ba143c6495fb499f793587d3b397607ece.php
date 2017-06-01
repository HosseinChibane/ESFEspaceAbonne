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
        $__internal_051df2cceb3bc234d8fa38e66b8fa85cd276dd8d7baf6bb018af828bc1cffd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051df2cceb3bc234d8fa38e66b8fa85cd276dd8d7baf6bb018af828bc1cffd68->enter($__internal_051df2cceb3bc234d8fa38e66b8fa85cd276dd8d7baf6bb018af828bc1cffd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_3db142d11eb2e1e189e2d00e5afd1cd7f1a702e0295369d080ff8138c358d692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db142d11eb2e1e189e2d00e5afd1cd7f1a702e0295369d080ff8138c358d692->enter($__internal_3db142d11eb2e1e189e2d00e5afd1cd7f1a702e0295369d080ff8138c358d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051df2cceb3bc234d8fa38e66b8fa85cd276dd8d7baf6bb018af828bc1cffd68->leave($__internal_051df2cceb3bc234d8fa38e66b8fa85cd276dd8d7baf6bb018af828bc1cffd68_prof);

        
        $__internal_3db142d11eb2e1e189e2d00e5afd1cd7f1a702e0295369d080ff8138c358d692->leave($__internal_3db142d11eb2e1e189e2d00e5afd1cd7f1a702e0295369d080ff8138c358d692_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_d323735075467a4b1b0b8591b3bf1b41a1704602e78418c7d653580dbcda3d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d323735075467a4b1b0b8591b3bf1b41a1704602e78418c7d653580dbcda3d10->enter($__internal_d323735075467a4b1b0b8591b3bf1b41a1704602e78418c7d653580dbcda3d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_804314e252f21dd5b1262e87e9e7974ff06995a8758eb42afb6b8ccdc1ca1d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804314e252f21dd5b1262e87e9e7974ff06995a8758eb42afb6b8ccdc1ca1d2b->enter($__internal_804314e252f21dd5b1262e87e9e7974ff06995a8758eb42afb6b8ccdc1ca1d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_804314e252f21dd5b1262e87e9e7974ff06995a8758eb42afb6b8ccdc1ca1d2b->leave($__internal_804314e252f21dd5b1262e87e9e7974ff06995a8758eb42afb6b8ccdc1ca1d2b_prof);

        
        $__internal_d323735075467a4b1b0b8591b3bf1b41a1704602e78418c7d653580dbcda3d10->leave($__internal_d323735075467a4b1b0b8591b3bf1b41a1704602e78418c7d653580dbcda3d10_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_6e7ac89d4931a472ec824110215edec92b05464796fdb53ad35a41a0b6598e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7ac89d4931a472ec824110215edec92b05464796fdb53ad35a41a0b6598e12->enter($__internal_6e7ac89d4931a472ec824110215edec92b05464796fdb53ad35a41a0b6598e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_59de9b98e6157c9206eee394eb52cddd2b2accd48c9a2e9868f712f46ff55432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59de9b98e6157c9206eee394eb52cddd2b2accd48c9a2e9868f712f46ff55432->enter($__internal_59de9b98e6157c9206eee394eb52cddd2b2accd48c9a2e9868f712f46ff55432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_59de9b98e6157c9206eee394eb52cddd2b2accd48c9a2e9868f712f46ff55432->leave($__internal_59de9b98e6157c9206eee394eb52cddd2b2accd48c9a2e9868f712f46ff55432_prof);

        
        $__internal_6e7ac89d4931a472ec824110215edec92b05464796fdb53ad35a41a0b6598e12->leave($__internal_6e7ac89d4931a472ec824110215edec92b05464796fdb53ad35a41a0b6598e12_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8453e0edc4412d71ac214fe2f97735f7aec94e168f7fbdda3b6a09e289df45e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8453e0edc4412d71ac214fe2f97735f7aec94e168f7fbdda3b6a09e289df45e2->enter($__internal_8453e0edc4412d71ac214fe2f97735f7aec94e168f7fbdda3b6a09e289df45e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd1db9e6ac1b2b0d5d9c2f854e12d438863e938c2f031d3f696a59a49717967a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1db9e6ac1b2b0d5d9c2f854e12d438863e938c2f031d3f696a59a49717967a->enter($__internal_bd1db9e6ac1b2b0d5d9c2f854e12d438863e938c2f031d3f696a59a49717967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_bd1db9e6ac1b2b0d5d9c2f854e12d438863e938c2f031d3f696a59a49717967a->leave($__internal_bd1db9e6ac1b2b0d5d9c2f854e12d438863e938c2f031d3f696a59a49717967a_prof);

        
        $__internal_8453e0edc4412d71ac214fe2f97735f7aec94e168f7fbdda3b6a09e289df45e2->leave($__internal_8453e0edc4412d71ac214fe2f97735f7aec94e168f7fbdda3b6a09e289df45e2_prof);

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
