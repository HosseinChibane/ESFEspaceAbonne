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
        $__internal_2b9df757fdebd9daf73fefa81c1c87d87264123b376d57f71002e22b742485a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9df757fdebd9daf73fefa81c1c87d87264123b376d57f71002e22b742485a4->enter($__internal_2b9df757fdebd9daf73fefa81c1c87d87264123b376d57f71002e22b742485a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:contact.html.twig"));

        $__internal_b4c1ef384e1f4b6cad0e5ddacab62738a26d6c57cc3a3895137d0c3107cd8771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c1ef384e1f4b6cad0e5ddacab62738a26d6c57cc3a3895137d0c3107cd8771->enter($__internal_b4c1ef384e1f4b6cad0e5ddacab62738a26d6c57cc3a3895137d0c3107cd8771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9df757fdebd9daf73fefa81c1c87d87264123b376d57f71002e22b742485a4->leave($__internal_2b9df757fdebd9daf73fefa81c1c87d87264123b376d57f71002e22b742485a4_prof);

        
        $__internal_b4c1ef384e1f4b6cad0e5ddacab62738a26d6c57cc3a3895137d0c3107cd8771->leave($__internal_b4c1ef384e1f4b6cad0e5ddacab62738a26d6c57cc3a3895137d0c3107cd8771_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_097a964b6ebd1eed8081c05bc7bdc3c881fcfc9133e29452397939a863a63fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097a964b6ebd1eed8081c05bc7bdc3c881fcfc9133e29452397939a863a63fb3->enter($__internal_097a964b6ebd1eed8081c05bc7bdc3c881fcfc9133e29452397939a863a63fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1808564853f3f2b63dbc4f4e8c7ccf7b6270fffb47dcacbc9b06dc1be3b97d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1808564853f3f2b63dbc4f4e8c7ccf7b6270fffb47dcacbc9b06dc1be3b97d1->enter($__internal_a1808564853f3f2b63dbc4f4e8c7ccf7b6270fffb47dcacbc9b06dc1be3b97d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tContact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1808564853f3f2b63dbc4f4e8c7ccf7b6270fffb47dcacbc9b06dc1be3b97d1->leave($__internal_a1808564853f3f2b63dbc4f4e8c7ccf7b6270fffb47dcacbc9b06dc1be3b97d1_prof);

        
        $__internal_097a964b6ebd1eed8081c05bc7bdc3c881fcfc9133e29452397939a863a63fb3->leave($__internal_097a964b6ebd1eed8081c05bc7bdc3c881fcfc9133e29452397939a863a63fb3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9c6a05ab2b782e2dd5abfc05a404084f97a2d6f10231b20b176e079c918ebc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6a05ab2b782e2dd5abfc05a404084f97a2d6f10231b20b176e079c918ebc7b->enter($__internal_9c6a05ab2b782e2dd5abfc05a404084f97a2d6f10231b20b176e079c918ebc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2c17654901e2decf5b254fe7b81f5aa5ff59b32496272513e4c7d3e57ccd2c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c17654901e2decf5b254fe7b81f5aa5ff59b32496272513e4c7d3e57ccd2c9f->enter($__internal_2c17654901e2decf5b254fe7b81f5aa5ff59b32496272513e4c7d3e57ccd2c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Contact</li>
    </ol>
";
        
        $__internal_2c17654901e2decf5b254fe7b81f5aa5ff59b32496272513e4c7d3e57ccd2c9f->leave($__internal_2c17654901e2decf5b254fe7b81f5aa5ff59b32496272513e4c7d3e57ccd2c9f_prof);

        
        $__internal_9c6a05ab2b782e2dd5abfc05a404084f97a2d6f10231b20b176e079c918ebc7b->leave($__internal_9c6a05ab2b782e2dd5abfc05a404084f97a2d6f10231b20b176e079c918ebc7b_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8aa230fd84a9b6509ad181a6f7aff076166817f51040e285eaa318b5251531f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa230fd84a9b6509ad181a6f7aff076166817f51040e285eaa318b5251531f1->enter($__internal_8aa230fd84a9b6509ad181a6f7aff076166817f51040e285eaa318b5251531f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0682160e99fc59e14cc66068f432198a50e8e3a5c16e0baf7b28b3e0cff8c9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0682160e99fc59e14cc66068f432198a50e8e3a5c16e0baf7b28b3e0cff8c9f6->enter($__internal_0682160e99fc59e14cc66068f432198a50e8e3a5c16e0baf7b28b3e0cff8c9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_0682160e99fc59e14cc66068f432198a50e8e3a5c16e0baf7b28b3e0cff8c9f6->leave($__internal_0682160e99fc59e14cc66068f432198a50e8e3a5c16e0baf7b28b3e0cff8c9f6_prof);

        
        $__internal_8aa230fd84a9b6509ad181a6f7aff076166817f51040e285eaa318b5251531f1->leave($__internal_8aa230fd84a9b6509ad181a6f7aff076166817f51040e285eaa318b5251531f1_prof);

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
