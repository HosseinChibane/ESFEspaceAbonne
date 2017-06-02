<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_608d6a0288b534b2552a9cee86d4ccdbb5b9a5f55419992b736482d7f47f88c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_c368c67c18a5ff651b0b7663248b52cb35238a2744b8ae303c9e5ada03d1537e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c368c67c18a5ff651b0b7663248b52cb35238a2744b8ae303c9e5ada03d1537e->enter($__internal_c368c67c18a5ff651b0b7663248b52cb35238a2744b8ae303c9e5ada03d1537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7b32701845751a17205f91ef0fd5eda53b70b779986931ffd3595a9d55079802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b32701845751a17205f91ef0fd5eda53b70b779986931ffd3595a9d55079802->enter($__internal_7b32701845751a17205f91ef0fd5eda53b70b779986931ffd3595a9d55079802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c368c67c18a5ff651b0b7663248b52cb35238a2744b8ae303c9e5ada03d1537e->leave($__internal_c368c67c18a5ff651b0b7663248b52cb35238a2744b8ae303c9e5ada03d1537e_prof);

        
        $__internal_7b32701845751a17205f91ef0fd5eda53b70b779986931ffd3595a9d55079802->leave($__internal_7b32701845751a17205f91ef0fd5eda53b70b779986931ffd3595a9d55079802_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d5d50066568b64d40147052123e6cca2b017d350e4d440cc337a6adc6007c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5d50066568b64d40147052123e6cca2b017d350e4d440cc337a6adc6007c6c->enter($__internal_8d5d50066568b64d40147052123e6cca2b017d350e4d440cc337a6adc6007c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2622c4f34574a8e4674fb1c5423441c4a973f31fc5b323c323c7919c4c20acaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2622c4f34574a8e4674fb1c5423441c4a973f31fc5b323c323c7919c4c20acaa->enter($__internal_2622c4f34574a8e4674fb1c5423441c4a973f31fc5b323c323c7919c4c20acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2622c4f34574a8e4674fb1c5423441c4a973f31fc5b323c323c7919c4c20acaa->leave($__internal_2622c4f34574a8e4674fb1c5423441c4a973f31fc5b323c323c7919c4c20acaa_prof);

        
        $__internal_8d5d50066568b64d40147052123e6cca2b017d350e4d440cc337a6adc6007c6c->leave($__internal_8d5d50066568b64d40147052123e6cca2b017d350e4d440cc337a6adc6007c6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1032b672b8e411b83a54a2085cd7eb4b1a5320f3b4442019e8b19eaeaf25b9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1032b672b8e411b83a54a2085cd7eb4b1a5320f3b4442019e8b19eaeaf25b9e1->enter($__internal_1032b672b8e411b83a54a2085cd7eb4b1a5320f3b4442019e8b19eaeaf25b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4bf8d4fe335d86ab27d4d98946241013f1c19af938d71133ba75e1df4d5aa70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bf8d4fe335d86ab27d4d98946241013f1c19af938d71133ba75e1df4d5aa70->enter($__internal_e4bf8d4fe335d86ab27d4d98946241013f1c19af938d71133ba75e1df4d5aa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e4bf8d4fe335d86ab27d4d98946241013f1c19af938d71133ba75e1df4d5aa70->leave($__internal_e4bf8d4fe335d86ab27d4d98946241013f1c19af938d71133ba75e1df4d5aa70_prof);

        
        $__internal_1032b672b8e411b83a54a2085cd7eb4b1a5320f3b4442019e8b19eaeaf25b9e1->leave($__internal_1032b672b8e411b83a54a2085cd7eb4b1a5320f3b4442019e8b19eaeaf25b9e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
