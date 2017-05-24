<?php

/* @ESFEspaceAbonne/Default/mesParametresMAIL.html.twig */
class __TwigTemplate_f51441c92b8f6aef6b8c79df60511b20945f7582cb8e0e708199bc6f9daaddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/mesParametresMAIL.html.twig", 1);
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
        $__internal_849e7999989292da5c24c2962d3ae52013bf2b5e36f72f42a9d57ed4928cf099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849e7999989292da5c24c2962d3ae52013bf2b5e36f72f42a9d57ed4928cf099->enter($__internal_849e7999989292da5c24c2962d3ae52013bf2b5e36f72f42a9d57ed4928cf099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesParametresMAIL.html.twig"));

        $__internal_a5642a9b3e4584ed90d922903dfea79fc26ea7385ed482c6c0a6db3aefc7907b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5642a9b3e4584ed90d922903dfea79fc26ea7385ed482c6c0a6db3aefc7907b->enter($__internal_a5642a9b3e4584ed90d922903dfea79fc26ea7385ed482c6c0a6db3aefc7907b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849e7999989292da5c24c2962d3ae52013bf2b5e36f72f42a9d57ed4928cf099->leave($__internal_849e7999989292da5c24c2962d3ae52013bf2b5e36f72f42a9d57ed4928cf099_prof);

        
        $__internal_a5642a9b3e4584ed90d922903dfea79fc26ea7385ed482c6c0a6db3aefc7907b->leave($__internal_a5642a9b3e4584ed90d922903dfea79fc26ea7385ed482c6c0a6db3aefc7907b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39f91392960cc6c9fa2a6442f34427b3183903fc2fb68d9d816dcf09f316df30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f91392960cc6c9fa2a6442f34427b3183903fc2fb68d9d816dcf09f316df30->enter($__internal_39f91392960cc6c9fa2a6442f34427b3183903fc2fb68d9d816dcf09f316df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17586e5250db0aa0571e5b308ee3ed3038eb564e3710ad9f6810015c846f90bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17586e5250db0aa0571e5b308ee3ed3038eb564e3710ad9f6810015c846f90bf->enter($__internal_17586e5250db0aa0571e5b308ee3ed3038eb564e3710ad9f6810015c846f90bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_17586e5250db0aa0571e5b308ee3ed3038eb564e3710ad9f6810015c846f90bf->leave($__internal_17586e5250db0aa0571e5b308ee3ed3038eb564e3710ad9f6810015c846f90bf_prof);

        
        $__internal_39f91392960cc6c9fa2a6442f34427b3183903fc2fb68d9d816dcf09f316df30->leave($__internal_39f91392960cc6c9fa2a6442f34427b3183903fc2fb68d9d816dcf09f316df30_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2ce86ccee0884ff6944563afff50f830f96bb5adc4133e696f0ccff605e5b1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce86ccee0884ff6944563afff50f830f96bb5adc4133e696f0ccff605e5b1c0->enter($__internal_2ce86ccee0884ff6944563afff50f830f96bb5adc4133e696f0ccff605e5b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_3272b016fd4777b2a7c83fbda3478d99bdf9397bc576b17cb535e725b8e30c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3272b016fd4777b2a7c83fbda3478d99bdf9397bc576b17cb535e725b8e30c75->enter($__internal_3272b016fd4777b2a7c83fbda3478d99bdf9397bc576b17cb535e725b8e30c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_3272b016fd4777b2a7c83fbda3478d99bdf9397bc576b17cb535e725b8e30c75->leave($__internal_3272b016fd4777b2a7c83fbda3478d99bdf9397bc576b17cb535e725b8e30c75_prof);

        
        $__internal_2ce86ccee0884ff6944563afff50f830f96bb5adc4133e696f0ccff605e5b1c0->leave($__internal_2ce86ccee0884ff6944563afff50f830f96bb5adc4133e696f0ccff605e5b1c0_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_dac4f7ac3f2614939f317f0bcefaae2737c2c6665fb70a270d2a14ce2f32643d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac4f7ac3f2614939f317f0bcefaae2737c2c6665fb70a270d2a14ce2f32643d->enter($__internal_dac4f7ac3f2614939f317f0bcefaae2737c2c6665fb70a270d2a14ce2f32643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8a63a2bd5ef0d64551cb7fe007dbe412cc365bf9039fecd8bed11d3ade3fc489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a63a2bd5ef0d64551cb7fe007dbe412cc365bf9039fecd8bed11d3ade3fc489->enter($__internal_8a63a2bd5ef0d64551cb7fe007dbe412cc365bf9039fecd8bed11d3ade3fc489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_8a63a2bd5ef0d64551cb7fe007dbe412cc365bf9039fecd8bed11d3ade3fc489->leave($__internal_8a63a2bd5ef0d64551cb7fe007dbe412cc365bf9039fecd8bed11d3ade3fc489_prof);

        
        $__internal_dac4f7ac3f2614939f317f0bcefaae2737c2c6665fb70a270d2a14ce2f32643d->leave($__internal_dac4f7ac3f2614939f317f0bcefaae2737c2c6665fb70a270d2a14ce2f32643d_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 


<!-- Mes Parametres -->
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "@ESFEspaceAbonne/Default/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\mesParametresMAIL.html.twig");
    }
}
