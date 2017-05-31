<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7a4d2980264112ed615220037fa78fed1dbbffcc2bb5857bc4c865761cf449ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f323749fd4194a504df0d25caa90fcc3ff04b64809cdfd8e0f34e1f42e59fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f323749fd4194a504df0d25caa90fcc3ff04b64809cdfd8e0f34e1f42e59fb4->enter($__internal_3f323749fd4194a504df0d25caa90fcc3ff04b64809cdfd8e0f34e1f42e59fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_903e225dac692846560cc561e848d744816636a9f3983f443dd03fa47a8686ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903e225dac692846560cc561e848d744816636a9f3983f443dd03fa47a8686ab->enter($__internal_903e225dac692846560cc561e848d744816636a9f3983f443dd03fa47a8686ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f323749fd4194a504df0d25caa90fcc3ff04b64809cdfd8e0f34e1f42e59fb4->leave($__internal_3f323749fd4194a504df0d25caa90fcc3ff04b64809cdfd8e0f34e1f42e59fb4_prof);

        
        $__internal_903e225dac692846560cc561e848d744816636a9f3983f443dd03fa47a8686ab->leave($__internal_903e225dac692846560cc561e848d744816636a9f3983f443dd03fa47a8686ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65ce1c155fdcc01fe39523cd1d0d6c5e0ecdeda0446963c875a419641317b259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ce1c155fdcc01fe39523cd1d0d6c5e0ecdeda0446963c875a419641317b259->enter($__internal_65ce1c155fdcc01fe39523cd1d0d6c5e0ecdeda0446963c875a419641317b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d52584fd0dd82216c5c135cc7b6cae4a627f9ceb8fc280e45360bc180ab44618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52584fd0dd82216c5c135cc7b6cae4a627f9ceb8fc280e45360bc180ab44618->enter($__internal_d52584fd0dd82216c5c135cc7b6cae4a627f9ceb8fc280e45360bc180ab44618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d52584fd0dd82216c5c135cc7b6cae4a627f9ceb8fc280e45360bc180ab44618->leave($__internal_d52584fd0dd82216c5c135cc7b6cae4a627f9ceb8fc280e45360bc180ab44618_prof);

        
        $__internal_65ce1c155fdcc01fe39523cd1d0d6c5e0ecdeda0446963c875a419641317b259->leave($__internal_65ce1c155fdcc01fe39523cd1d0d6c5e0ecdeda0446963c875a419641317b259_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
