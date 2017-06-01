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
        $__internal_7c2ce36b10901740d35ea63a395eb85d33566fa49be6d1aadcdc43aefa4abd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2ce36b10901740d35ea63a395eb85d33566fa49be6d1aadcdc43aefa4abd99->enter($__internal_7c2ce36b10901740d35ea63a395eb85d33566fa49be6d1aadcdc43aefa4abd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/contact.html.twig"));

        $__internal_2f7a621a4126d2b1f19241b45d99ed6d6d52758888e64f2a7ab43599963f71f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7a621a4126d2b1f19241b45d99ed6d6d52758888e64f2a7ab43599963f71f7->enter($__internal_2f7a621a4126d2b1f19241b45d99ed6d6d52758888e64f2a7ab43599963f71f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2ce36b10901740d35ea63a395eb85d33566fa49be6d1aadcdc43aefa4abd99->leave($__internal_7c2ce36b10901740d35ea63a395eb85d33566fa49be6d1aadcdc43aefa4abd99_prof);

        
        $__internal_2f7a621a4126d2b1f19241b45d99ed6d6d52758888e64f2a7ab43599963f71f7->leave($__internal_2f7a621a4126d2b1f19241b45d99ed6d6d52758888e64f2a7ab43599963f71f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06c2cca142e9cf7d4eaa292e9daa68a3d85adbe8b684440f5ce18edbcab56ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c2cca142e9cf7d4eaa292e9daa68a3d85adbe8b684440f5ce18edbcab56ca4->enter($__internal_06c2cca142e9cf7d4eaa292e9daa68a3d85adbe8b684440f5ce18edbcab56ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68ab8eee45ef91c07e416f098f6430e9d130a85d95b8c25240c284fba3654680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ab8eee45ef91c07e416f098f6430e9d130a85d95b8c25240c284fba3654680->enter($__internal_68ab8eee45ef91c07e416f098f6430e9d130a85d95b8c25240c284fba3654680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tContact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68ab8eee45ef91c07e416f098f6430e9d130a85d95b8c25240c284fba3654680->leave($__internal_68ab8eee45ef91c07e416f098f6430e9d130a85d95b8c25240c284fba3654680_prof);

        
        $__internal_06c2cca142e9cf7d4eaa292e9daa68a3d85adbe8b684440f5ce18edbcab56ca4->leave($__internal_06c2cca142e9cf7d4eaa292e9daa68a3d85adbe8b684440f5ce18edbcab56ca4_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5af712fb7e6d9c73e32c9084386b9b425481ca85df2372ba73c05c1bb2f77b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af712fb7e6d9c73e32c9084386b9b425481ca85df2372ba73c05c1bb2f77b02->enter($__internal_5af712fb7e6d9c73e32c9084386b9b425481ca85df2372ba73c05c1bb2f77b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_624829eec24ad16903dd80ece762a533ebc5749f90e7969087f64ab34849001e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624829eec24ad16903dd80ece762a533ebc5749f90e7969087f64ab34849001e->enter($__internal_624829eec24ad16903dd80ece762a533ebc5749f90e7969087f64ab34849001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Contact</li>
    </ol>
";
        
        $__internal_624829eec24ad16903dd80ece762a533ebc5749f90e7969087f64ab34849001e->leave($__internal_624829eec24ad16903dd80ece762a533ebc5749f90e7969087f64ab34849001e_prof);

        
        $__internal_5af712fb7e6d9c73e32c9084386b9b425481ca85df2372ba73c05c1bb2f77b02->leave($__internal_5af712fb7e6d9c73e32c9084386b9b425481ca85df2372ba73c05c1bb2f77b02_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4232dadc25ed98c06046f7be61c3bb14f15be93053ad0bb0cd0d970ba0d2878f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4232dadc25ed98c06046f7be61c3bb14f15be93053ad0bb0cd0d970ba0d2878f->enter($__internal_4232dadc25ed98c06046f7be61c3bb14f15be93053ad0bb0cd0d970ba0d2878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8c04ff215ffd48667c3524d60e86cccdef116a874b50dc63e92ff9d0f300277e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c04ff215ffd48667c3524d60e86cccdef116a874b50dc63e92ff9d0f300277e->enter($__internal_8c04ff215ffd48667c3524d60e86cccdef116a874b50dc63e92ff9d0f300277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_8c04ff215ffd48667c3524d60e86cccdef116a874b50dc63e92ff9d0f300277e->leave($__internal_8c04ff215ffd48667c3524d60e86cccdef116a874b50dc63e92ff9d0f300277e_prof);

        
        $__internal_4232dadc25ed98c06046f7be61c3bb14f15be93053ad0bb0cd0d970ba0d2878f->leave($__internal_4232dadc25ed98c06046f7be61c3bb14f15be93053ad0bb0cd0d970ba0d2878f_prof);

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
