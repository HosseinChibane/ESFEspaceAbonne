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
        $__internal_911165a9cdb1bdf0330f5197f09f6a07bc383a5f7b36d7da7a5ead58c642ba06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911165a9cdb1bdf0330f5197f09f6a07bc383a5f7b36d7da7a5ead58c642ba06->enter($__internal_911165a9cdb1bdf0330f5197f09f6a07bc383a5f7b36d7da7a5ead58c642ba06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_6a725c2834f101a5e433c27fbce2699b8b65a011224db2de9e4a0f538bb2a421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a725c2834f101a5e433c27fbce2699b8b65a011224db2de9e4a0f538bb2a421->enter($__internal_6a725c2834f101a5e433c27fbce2699b8b65a011224db2de9e4a0f538bb2a421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_911165a9cdb1bdf0330f5197f09f6a07bc383a5f7b36d7da7a5ead58c642ba06->leave($__internal_911165a9cdb1bdf0330f5197f09f6a07bc383a5f7b36d7da7a5ead58c642ba06_prof);

        
        $__internal_6a725c2834f101a5e433c27fbce2699b8b65a011224db2de9e4a0f538bb2a421->leave($__internal_6a725c2834f101a5e433c27fbce2699b8b65a011224db2de9e4a0f538bb2a421_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = array())
    {
        $__internal_18df6256dce53b8c68e22871e64aa7147598dc3565b4127ee734dab7a31f8853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18df6256dce53b8c68e22871e64aa7147598dc3565b4127ee734dab7a31f8853->enter($__internal_18df6256dce53b8c68e22871e64aa7147598dc3565b4127ee734dab7a31f8853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_0a2b7f28aad5a9dbb6ba51cd3bdf1bb66fdcd5fe5651a7611328b9cd599fa7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2b7f28aad5a9dbb6ba51cd3bdf1bb66fdcd5fe5651a7611328b9cd599fa7fe->enter($__internal_0a2b7f28aad5a9dbb6ba51cd3bdf1bb66fdcd5fe5651a7611328b9cd599fa7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_0a2b7f28aad5a9dbb6ba51cd3bdf1bb66fdcd5fe5651a7611328b9cd599fa7fe->leave($__internal_0a2b7f28aad5a9dbb6ba51cd3bdf1bb66fdcd5fe5651a7611328b9cd599fa7fe_prof);

        
        $__internal_18df6256dce53b8c68e22871e64aa7147598dc3565b4127ee734dab7a31f8853->leave($__internal_18df6256dce53b8c68e22871e64aa7147598dc3565b4127ee734dab7a31f8853_prof);

    }

    public function block_Content($context, array $blocks = array())
    {
        $__internal_f907494e8877df85f636066faae40d0259ec304de2b4c386c2706cb9a070ffc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f907494e8877df85f636066faae40d0259ec304de2b4c386c2706cb9a070ffc8->enter($__internal_f907494e8877df85f636066faae40d0259ec304de2b4c386c2706cb9a070ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5f4aa28a6aee5653912050a8d1f70718be9e0dec2f80785befec239f6283fae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4aa28a6aee5653912050a8d1f70718be9e0dec2f80785befec239f6283fae8->enter($__internal_5f4aa28a6aee5653912050a8d1f70718be9e0dec2f80785befec239f6283fae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_5f4aa28a6aee5653912050a8d1f70718be9e0dec2f80785befec239f6283fae8->leave($__internal_5f4aa28a6aee5653912050a8d1f70718be9e0dec2f80785befec239f6283fae8_prof);

        
        $__internal_f907494e8877df85f636066faae40d0259ec304de2b4c386c2706cb9a070ffc8->leave($__internal_f907494e8877df85f636066faae40d0259ec304de2b4c386c2706cb9a070ffc8_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6868a964e73609a46c7a60ff12f71a1e7887efa52179a8211d4b376bce326ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6868a964e73609a46c7a60ff12f71a1e7887efa52179a8211d4b376bce326ead->enter($__internal_6868a964e73609a46c7a60ff12f71a1e7887efa52179a8211d4b376bce326ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b95753fa7472ab86fa068a1355e94f4a8eff590b0f854cb1a5902bce082bc243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95753fa7472ab86fa068a1355e94f4a8eff590b0f854cb1a5902bce082bc243->enter($__internal_b95753fa7472ab86fa068a1355e94f4a8eff590b0f854cb1a5902bce082bc243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_b95753fa7472ab86fa068a1355e94f4a8eff590b0f854cb1a5902bce082bc243->leave($__internal_b95753fa7472ab86fa068a1355e94f4a8eff590b0f854cb1a5902bce082bc243_prof);

        
        $__internal_6868a964e73609a46c7a60ff12f71a1e7887efa52179a8211d4b376bce326ead->leave($__internal_6868a964e73609a46c7a60ff12f71a1e7887efa52179a8211d4b376bce326ead_prof);

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
