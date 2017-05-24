<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_27414dd96eb7978bf4848fcedec01e5419ebe7cecef0f6aba88803088c787dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8966107d872eeb03f365f746f1ce1863562fd8152e70adfe3b33dbc918888c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8966107d872eeb03f365f746f1ce1863562fd8152e70adfe3b33dbc918888c24->enter($__internal_8966107d872eeb03f365f746f1ce1863562fd8152e70adfe3b33dbc918888c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_56bd0202596c46d5d22f6c925febbf41e3883476dca07df464be83cfaba9875e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bd0202596c46d5d22f6c925febbf41e3883476dca07df464be83cfaba9875e->enter($__internal_56bd0202596c46d5d22f6c925febbf41e3883476dca07df464be83cfaba9875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8966107d872eeb03f365f746f1ce1863562fd8152e70adfe3b33dbc918888c24->leave($__internal_8966107d872eeb03f365f746f1ce1863562fd8152e70adfe3b33dbc918888c24_prof);

        
        $__internal_56bd0202596c46d5d22f6c925febbf41e3883476dca07df464be83cfaba9875e->leave($__internal_56bd0202596c46d5d22f6c925febbf41e3883476dca07df464be83cfaba9875e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14382022b84dd1b86a8f5832cfff76c6c6aa1cc749a48e6a9ea482f1db4f0464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14382022b84dd1b86a8f5832cfff76c6c6aa1cc749a48e6a9ea482f1db4f0464->enter($__internal_14382022b84dd1b86a8f5832cfff76c6c6aa1cc749a48e6a9ea482f1db4f0464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23ea1ef3c2f3190956059628a5e6fc9759320f288ad7982d6ea33d4e32acccd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ea1ef3c2f3190956059628a5e6fc9759320f288ad7982d6ea33d4e32acccd5->enter($__internal_23ea1ef3c2f3190956059628a5e6fc9759320f288ad7982d6ea33d4e32acccd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_23ea1ef3c2f3190956059628a5e6fc9759320f288ad7982d6ea33d4e32acccd5->leave($__internal_23ea1ef3c2f3190956059628a5e6fc9759320f288ad7982d6ea33d4e32acccd5_prof);

        
        $__internal_14382022b84dd1b86a8f5832cfff76c6c6aa1cc749a48e6a9ea482f1db4f0464->leave($__internal_14382022b84dd1b86a8f5832cfff76c6c6aa1cc749a48e6a9ea482f1db4f0464_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3dc5021840ffb9faf132ba8c9a9bd68e9577fce4bf51f764cd82ce6b7c1e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3dc5021840ffb9faf132ba8c9a9bd68e9577fce4bf51f764cd82ce6b7c1e8d->enter($__internal_da3dc5021840ffb9faf132ba8c9a9bd68e9577fce4bf51f764cd82ce6b7c1e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ff8b7b97e7ff808fab6891ee2cc2c10abe6e88eeea9aa9149fb39d6b1b6ca2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff8b7b97e7ff808fab6891ee2cc2c10abe6e88eeea9aa9149fb39d6b1b6ca2c->enter($__internal_2ff8b7b97e7ff808fab6891ee2cc2c10abe6e88eeea9aa9149fb39d6b1b6ca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2ff8b7b97e7ff808fab6891ee2cc2c10abe6e88eeea9aa9149fb39d6b1b6ca2c->leave($__internal_2ff8b7b97e7ff808fab6891ee2cc2c10abe6e88eeea9aa9149fb39d6b1b6ca2c_prof);

        
        $__internal_da3dc5021840ffb9faf132ba8c9a9bd68e9577fce4bf51f764cd82ce6b7c1e8d->leave($__internal_da3dc5021840ffb9faf132ba8c9a9bd68e9577fce4bf51f764cd82ce6b7c1e8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
