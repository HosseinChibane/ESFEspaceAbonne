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
        $__internal_9b8b1d053de7e09277dc5aabf5d676dbb5911c0c419c77ec149b28c42675f791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8b1d053de7e09277dc5aabf5d676dbb5911c0c419c77ec149b28c42675f791->enter($__internal_9b8b1d053de7e09277dc5aabf5d676dbb5911c0c419c77ec149b28c42675f791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_b990a5a54cf9c88df6a4dbd93d58f769a1ee3bfa49060796744a9f4872cf0e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b990a5a54cf9c88df6a4dbd93d58f769a1ee3bfa49060796744a9f4872cf0e3d->enter($__internal_b990a5a54cf9c88df6a4dbd93d58f769a1ee3bfa49060796744a9f4872cf0e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b8b1d053de7e09277dc5aabf5d676dbb5911c0c419c77ec149b28c42675f791->leave($__internal_9b8b1d053de7e09277dc5aabf5d676dbb5911c0c419c77ec149b28c42675f791_prof);

        
        $__internal_b990a5a54cf9c88df6a4dbd93d58f769a1ee3bfa49060796744a9f4872cf0e3d->leave($__internal_b990a5a54cf9c88df6a4dbd93d58f769a1ee3bfa49060796744a9f4872cf0e3d_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_f896e2dacf4e3c02e0b827469a6848ab545b041a3fde03f304462f8b716a7829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f896e2dacf4e3c02e0b827469a6848ab545b041a3fde03f304462f8b716a7829->enter($__internal_f896e2dacf4e3c02e0b827469a6848ab545b041a3fde03f304462f8b716a7829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_ce6bd15588b73598ed8f4c8b887274c9eab93b708b20480ed34a20c1c84d3ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6bd15588b73598ed8f4c8b887274c9eab93b708b20480ed34a20c1c84d3ca2->enter($__internal_ce6bd15588b73598ed8f4c8b887274c9eab93b708b20480ed34a20c1c84d3ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_ce6bd15588b73598ed8f4c8b887274c9eab93b708b20480ed34a20c1c84d3ca2->leave($__internal_ce6bd15588b73598ed8f4c8b887274c9eab93b708b20480ed34a20c1c84d3ca2_prof);

        
        $__internal_f896e2dacf4e3c02e0b827469a6848ab545b041a3fde03f304462f8b716a7829->leave($__internal_f896e2dacf4e3c02e0b827469a6848ab545b041a3fde03f304462f8b716a7829_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_31ff294d193eb2e364a823b94ece84d5b7ecf077b9a8305852d94e497c28a981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ff294d193eb2e364a823b94ece84d5b7ecf077b9a8305852d94e497c28a981->enter($__internal_31ff294d193eb2e364a823b94ece84d5b7ecf077b9a8305852d94e497c28a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_82c178dbf5a195f5276d1232af89394dba8fd03702df96994474a5ec9ef59aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c178dbf5a195f5276d1232af89394dba8fd03702df96994474a5ec9ef59aa3->enter($__internal_82c178dbf5a195f5276d1232af89394dba8fd03702df96994474a5ec9ef59aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_82c178dbf5a195f5276d1232af89394dba8fd03702df96994474a5ec9ef59aa3->leave($__internal_82c178dbf5a195f5276d1232af89394dba8fd03702df96994474a5ec9ef59aa3_prof);

        
        $__internal_31ff294d193eb2e364a823b94ece84d5b7ecf077b9a8305852d94e497c28a981->leave($__internal_31ff294d193eb2e364a823b94ece84d5b7ecf077b9a8305852d94e497c28a981_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47c1882ea261f7c8a4d955e2265bc69ea03867a887dfa8c056409d0a2dfd4587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c1882ea261f7c8a4d955e2265bc69ea03867a887dfa8c056409d0a2dfd4587->enter($__internal_47c1882ea261f7c8a4d955e2265bc69ea03867a887dfa8c056409d0a2dfd4587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98ac5198473a021ea957a725495bcfe8ee202cbf74a63f19a218b78070c77e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ac5198473a021ea957a725495bcfe8ee202cbf74a63f19a218b78070c77e46->enter($__internal_98ac5198473a021ea957a725495bcfe8ee202cbf74a63f19a218b78070c77e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_98ac5198473a021ea957a725495bcfe8ee202cbf74a63f19a218b78070c77e46->leave($__internal_98ac5198473a021ea957a725495bcfe8ee202cbf74a63f19a218b78070c77e46_prof);

        
        $__internal_47c1882ea261f7c8a4d955e2265bc69ea03867a887dfa8c056409d0a2dfd4587->leave($__internal_47c1882ea261f7c8a4d955e2265bc69ea03867a887dfa8c056409d0a2dfd4587_prof);

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
