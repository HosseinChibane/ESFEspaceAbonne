<?php

/* ESFEspaceAbonneBundle:back:contact.html.twig */
class __TwigTemplate_b6750eed25147cd796f8dc2f992c4e236ada1ecd170a6cad852339a04b2b647b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:contact.html.twig", 1);
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
        $__internal_206d7e38d66585df79a685c342f057a784179725c8a8a2987cc831d1b935458d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206d7e38d66585df79a685c342f057a784179725c8a8a2987cc831d1b935458d->enter($__internal_206d7e38d66585df79a685c342f057a784179725c8a8a2987cc831d1b935458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:contact.html.twig"));

        $__internal_7140b2592c4adb7b64aad17c03e6fffb3b69a21194a586ab9a15fd67e6f3f01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7140b2592c4adb7b64aad17c03e6fffb3b69a21194a586ab9a15fd67e6f3f01d->enter($__internal_7140b2592c4adb7b64aad17c03e6fffb3b69a21194a586ab9a15fd67e6f3f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_206d7e38d66585df79a685c342f057a784179725c8a8a2987cc831d1b935458d->leave($__internal_206d7e38d66585df79a685c342f057a784179725c8a8a2987cc831d1b935458d_prof);

        
        $__internal_7140b2592c4adb7b64aad17c03e6fffb3b69a21194a586ab9a15fd67e6f3f01d->leave($__internal_7140b2592c4adb7b64aad17c03e6fffb3b69a21194a586ab9a15fd67e6f3f01d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f373ee454fabd523d85676741405b256d53f11156a3444a6c0d074f7efc6d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f373ee454fabd523d85676741405b256d53f11156a3444a6c0d074f7efc6d21->enter($__internal_2f373ee454fabd523d85676741405b256d53f11156a3444a6c0d074f7efc6d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8d3bc35d86fd9a0025f155f5b3ff72225ed4a19e3890dfe60f1b73d70c53106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d3bc35d86fd9a0025f155f5b3ff72225ed4a19e3890dfe60f1b73d70c53106->enter($__internal_e8d3bc35d86fd9a0025f155f5b3ff72225ed4a19e3890dfe60f1b73d70c53106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tContact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e8d3bc35d86fd9a0025f155f5b3ff72225ed4a19e3890dfe60f1b73d70c53106->leave($__internal_e8d3bc35d86fd9a0025f155f5b3ff72225ed4a19e3890dfe60f1b73d70c53106_prof);

        
        $__internal_2f373ee454fabd523d85676741405b256d53f11156a3444a6c0d074f7efc6d21->leave($__internal_2f373ee454fabd523d85676741405b256d53f11156a3444a6c0d074f7efc6d21_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8de0fdc46c9048314333e5068998f5e3b8d05e34549a12a05d412e991d834ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de0fdc46c9048314333e5068998f5e3b8d05e34549a12a05d412e991d834ae5->enter($__internal_8de0fdc46c9048314333e5068998f5e3b8d05e34549a12a05d412e991d834ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_06c3ef8a4dc55529a7302c3f2f5b4be84d8f3affb67a3d3b1e747152db1c64b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3ef8a4dc55529a7302c3f2f5b4be84d8f3affb67a3d3b1e747152db1c64b5->enter($__internal_06c3ef8a4dc55529a7302c3f2f5b4be84d8f3affb67a3d3b1e747152db1c64b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Contact</li>
    </ol>
";
        
        $__internal_06c3ef8a4dc55529a7302c3f2f5b4be84d8f3affb67a3d3b1e747152db1c64b5->leave($__internal_06c3ef8a4dc55529a7302c3f2f5b4be84d8f3affb67a3d3b1e747152db1c64b5_prof);

        
        $__internal_8de0fdc46c9048314333e5068998f5e3b8d05e34549a12a05d412e991d834ae5->leave($__internal_8de0fdc46c9048314333e5068998f5e3b8d05e34549a12a05d412e991d834ae5_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ade602709f78f04b2ce3002433434766f4df37b7cda44021f071c2e197ff3cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade602709f78f04b2ce3002433434766f4df37b7cda44021f071c2e197ff3cea->enter($__internal_ade602709f78f04b2ce3002433434766f4df37b7cda44021f071c2e197ff3cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a5e671fb390403c6c8d66d4d01ae263ca9b63cd10e12f47c1281fbd57758edc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e671fb390403c6c8d66d4d01ae263ca9b63cd10e12f47c1281fbd57758edc2->enter($__internal_a5e671fb390403c6c8d66d4d01ae263ca9b63cd10e12f47c1281fbd57758edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_a5e671fb390403c6c8d66d4d01ae263ca9b63cd10e12f47c1281fbd57758edc2->leave($__internal_a5e671fb390403c6c8d66d4d01ae263ca9b63cd10e12f47c1281fbd57758edc2_prof);

        
        $__internal_ade602709f78f04b2ce3002433434766f4df37b7cda44021f071c2e197ff3cea->leave($__internal_ade602709f78f04b2ce3002433434766f4df37b7cda44021f071c2e197ff3cea_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:contact.html.twig";
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
\t{% endblock %}", "ESFEspaceAbonneBundle:back:contact.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/contact.html.twig");
    }
}
