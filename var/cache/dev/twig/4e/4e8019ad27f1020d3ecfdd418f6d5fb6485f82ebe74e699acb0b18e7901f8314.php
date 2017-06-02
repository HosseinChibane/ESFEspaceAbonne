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
        $__internal_44a1e30408d50cf8936d417e1aa7206481e028c25ca8bcdbebf5ed3bb03cf6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a1e30408d50cf8936d417e1aa7206481e028c25ca8bcdbebf5ed3bb03cf6fa->enter($__internal_44a1e30408d50cf8936d417e1aa7206481e028c25ca8bcdbebf5ed3bb03cf6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:contact.html.twig"));

        $__internal_304eabbd21af5741c1d25472dfd27cc2717a77e445b870c87b3447cd3f2c5cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304eabbd21af5741c1d25472dfd27cc2717a77e445b870c87b3447cd3f2c5cef->enter($__internal_304eabbd21af5741c1d25472dfd27cc2717a77e445b870c87b3447cd3f2c5cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a1e30408d50cf8936d417e1aa7206481e028c25ca8bcdbebf5ed3bb03cf6fa->leave($__internal_44a1e30408d50cf8936d417e1aa7206481e028c25ca8bcdbebf5ed3bb03cf6fa_prof);

        
        $__internal_304eabbd21af5741c1d25472dfd27cc2717a77e445b870c87b3447cd3f2c5cef->leave($__internal_304eabbd21af5741c1d25472dfd27cc2717a77e445b870c87b3447cd3f2c5cef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74efc90313a587593619d2f5765b3dd555141b212169a0c884a498e0f6eaf0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74efc90313a587593619d2f5765b3dd555141b212169a0c884a498e0f6eaf0ea->enter($__internal_74efc90313a587593619d2f5765b3dd555141b212169a0c884a498e0f6eaf0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17c693438cd76dfa9d21c4cac2b3bb1a6f71c0f60682a337e30fe9a11a8c291b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c693438cd76dfa9d21c4cac2b3bb1a6f71c0f60682a337e30fe9a11a8c291b->enter($__internal_17c693438cd76dfa9d21c4cac2b3bb1a6f71c0f60682a337e30fe9a11a8c291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tContact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_17c693438cd76dfa9d21c4cac2b3bb1a6f71c0f60682a337e30fe9a11a8c291b->leave($__internal_17c693438cd76dfa9d21c4cac2b3bb1a6f71c0f60682a337e30fe9a11a8c291b_prof);

        
        $__internal_74efc90313a587593619d2f5765b3dd555141b212169a0c884a498e0f6eaf0ea->leave($__internal_74efc90313a587593619d2f5765b3dd555141b212169a0c884a498e0f6eaf0ea_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b6aee3e2b4235e1ae75b59d343c2460e98d971c0f249e0212cd7cffe395f23b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aee3e2b4235e1ae75b59d343c2460e98d971c0f249e0212cd7cffe395f23b8->enter($__internal_b6aee3e2b4235e1ae75b59d343c2460e98d971c0f249e0212cd7cffe395f23b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ce4aae07ada9b3bf4f62108aebec34d687fbfa40ca01f8bc0d7b0dac3a31292c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4aae07ada9b3bf4f62108aebec34d687fbfa40ca01f8bc0d7b0dac3a31292c->enter($__internal_ce4aae07ada9b3bf4f62108aebec34d687fbfa40ca01f8bc0d7b0dac3a31292c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Contact</li>
    </ol>
";
        
        $__internal_ce4aae07ada9b3bf4f62108aebec34d687fbfa40ca01f8bc0d7b0dac3a31292c->leave($__internal_ce4aae07ada9b3bf4f62108aebec34d687fbfa40ca01f8bc0d7b0dac3a31292c_prof);

        
        $__internal_b6aee3e2b4235e1ae75b59d343c2460e98d971c0f249e0212cd7cffe395f23b8->leave($__internal_b6aee3e2b4235e1ae75b59d343c2460e98d971c0f249e0212cd7cffe395f23b8_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b3d865f403bf10a3a358255f4abec96115e83fce48535a4fdec0ae5dfb80be39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d865f403bf10a3a358255f4abec96115e83fce48535a4fdec0ae5dfb80be39->enter($__internal_b3d865f403bf10a3a358255f4abec96115e83fce48535a4fdec0ae5dfb80be39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_58dc09bb1db814fb506ca4b2ef88b89d1486d08b8d63b6ce33dc069b44117696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dc09bb1db814fb506ca4b2ef88b89d1486d08b8d63b6ce33dc069b44117696->enter($__internal_58dc09bb1db814fb506ca4b2ef88b89d1486d08b8d63b6ce33dc069b44117696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_58dc09bb1db814fb506ca4b2ef88b89d1486d08b8d63b6ce33dc069b44117696->leave($__internal_58dc09bb1db814fb506ca4b2ef88b89d1486d08b8d63b6ce33dc069b44117696_prof);

        
        $__internal_b3d865f403bf10a3a358255f4abec96115e83fce48535a4fdec0ae5dfb80be39->leave($__internal_b3d865f403bf10a3a358255f4abec96115e83fce48535a4fdec0ae5dfb80be39_prof);

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
