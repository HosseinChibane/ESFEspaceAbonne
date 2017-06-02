<?php

/* @ESFEspaceAbonne/back/contact.html.twig */
class __TwigTemplate_9156b393bcbc441eecc7a1349cbff5c31680dd503f99c71d56d31d93bb2a97d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_095ee05880d3d881521d0345611ecdc7f833e899652491c5f63b1586a7964c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095ee05880d3d881521d0345611ecdc7f833e899652491c5f63b1586a7964c64->enter($__internal_095ee05880d3d881521d0345611ecdc7f833e899652491c5f63b1586a7964c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/contact.html.twig"));

        $__internal_36cd7ef24cd793680a7463530dc4f440302eea372c9f53b7fac38aced58bf3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cd7ef24cd793680a7463530dc4f440302eea372c9f53b7fac38aced58bf3b4->enter($__internal_36cd7ef24cd793680a7463530dc4f440302eea372c9f53b7fac38aced58bf3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095ee05880d3d881521d0345611ecdc7f833e899652491c5f63b1586a7964c64->leave($__internal_095ee05880d3d881521d0345611ecdc7f833e899652491c5f63b1586a7964c64_prof);

        
        $__internal_36cd7ef24cd793680a7463530dc4f440302eea372c9f53b7fac38aced58bf3b4->leave($__internal_36cd7ef24cd793680a7463530dc4f440302eea372c9f53b7fac38aced58bf3b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d453bdfbe5dee40e427680107d3ad36fbbb78dbc0d1178f1b4dc8f483c46bd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d453bdfbe5dee40e427680107d3ad36fbbb78dbc0d1178f1b4dc8f483c46bd8c->enter($__internal_d453bdfbe5dee40e427680107d3ad36fbbb78dbc0d1178f1b4dc8f483c46bd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_382a9c0d7d152c3d6a5dacc0d87ba0eede9d0ce93f9ddf36ff149a09d0358a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382a9c0d7d152c3d6a5dacc0d87ba0eede9d0ce93f9ddf36ff149a09d0358a2e->enter($__internal_382a9c0d7d152c3d6a5dacc0d87ba0eede9d0ce93f9ddf36ff149a09d0358a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tContact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_382a9c0d7d152c3d6a5dacc0d87ba0eede9d0ce93f9ddf36ff149a09d0358a2e->leave($__internal_382a9c0d7d152c3d6a5dacc0d87ba0eede9d0ce93f9ddf36ff149a09d0358a2e_prof);

        
        $__internal_d453bdfbe5dee40e427680107d3ad36fbbb78dbc0d1178f1b4dc8f483c46bd8c->leave($__internal_d453bdfbe5dee40e427680107d3ad36fbbb78dbc0d1178f1b4dc8f483c46bd8c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fa284a98661937f992174a11274f3aa2158a0ac34516820b35320aea0a779d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa284a98661937f992174a11274f3aa2158a0ac34516820b35320aea0a779d05->enter($__internal_fa284a98661937f992174a11274f3aa2158a0ac34516820b35320aea0a779d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_40237aa348a92c25767b14c4915ace0aa3509647fb7cb99f52aeb4c2d7bc4903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40237aa348a92c25767b14c4915ace0aa3509647fb7cb99f52aeb4c2d7bc4903->enter($__internal_40237aa348a92c25767b14c4915ace0aa3509647fb7cb99f52aeb4c2d7bc4903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Contact</li>
    </ol>
";
        
        $__internal_40237aa348a92c25767b14c4915ace0aa3509647fb7cb99f52aeb4c2d7bc4903->leave($__internal_40237aa348a92c25767b14c4915ace0aa3509647fb7cb99f52aeb4c2d7bc4903_prof);

        
        $__internal_fa284a98661937f992174a11274f3aa2158a0ac34516820b35320aea0a779d05->leave($__internal_fa284a98661937f992174a11274f3aa2158a0ac34516820b35320aea0a779d05_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_dd75726de5af963dc0c27cc503f1797defe1e199de593a82b4a76987ee28693c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd75726de5af963dc0c27cc503f1797defe1e199de593a82b4a76987ee28693c->enter($__internal_dd75726de5af963dc0c27cc503f1797defe1e199de593a82b4a76987ee28693c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_1aa5f0eea00ca60baf65797eb481f3c52201f0ff1f4bd9dcf9c23eb1010aad6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa5f0eea00ca60baf65797eb481f3c52201f0ff1f4bd9dcf9c23eb1010aad6c->enter($__internal_1aa5f0eea00ca60baf65797eb481f3c52201f0ff1f4bd9dcf9c23eb1010aad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 15
        echo "\t<!-- Content Row -->
\t<div class=\"row\">
\t\t<!-- Contact Form -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<h3>Contactez nous</h3>
\t\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Sujet</label>
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Message</label>
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 51
        echo "\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 55
            echo "\t\t\t\t\t<div class=\"flash-notice\">
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\">
\t\t\t\t";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t";
        
        $__internal_1aa5f0eea00ca60baf65797eb481f3c52201f0ff1f4bd9dcf9c23eb1010aad6c->leave($__internal_1aa5f0eea00ca60baf65797eb481f3c52201f0ff1f4bd9dcf9c23eb1010aad6c_prof);

        
        $__internal_dd75726de5af963dc0c27cc503f1797defe1e199de593a82b4a76987ee28693c->leave($__internal_dd75726de5af963dc0c27cc503f1797defe1e199de593a82b4a76987ee28693c_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 60,  187 => 59,  178 => 56,  175 => 55,  171 => 54,  166 => 52,  163 => 51,  157 => 47,  153 => 46,  144 => 40,  140 => 39,  131 => 33,  127 => 32,  118 => 26,  114 => 25,  107 => 21,  99 => 15,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tContact - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Contact</li>
    </ol>
{% endblock %}

{% block Content %}
\t<!-- Content Row -->
\t<div class=\"row\">
\t\t<!-- Contact Form -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<h3>Contactez nous</h3>
\t\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Sujet</label>
\t\t\t\t\t\t{{ form_widget(form.subject) }}
\t\t\t\t\t\t{{ form_errors(form.subject) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t{{ form_widget(form.name) }}
\t\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label>Message</label>
\t\t\t\t\t\t{{ form_widget(form.message) }}
\t\t\t\t\t\t{{ form_errors(form.message) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# Render CSRF token etc .#}
\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t{{ form_rest(form) }}
\t\t\t\t</div>
\t\t\t\t{% for flash_message in app.session.flashBag.get('notice') %}
\t\t\t\t\t<div class=\"flash-notice\">
\t\t\t\t\t\t{{ flash_message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\">
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t\t<!-- /.row -->
\t</div>
\t{% endblock %}", "@ESFEspaceAbonne/back/contact.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\contact.html.twig");
    }
}
