<?php

/* @ESFEspaceAbonne/back/mesParametresMAIL.html.twig */
class __TwigTemplate_85bd9f57d72998fff84f211d7844fb0b42742bf6cc156caeb69aeb1376a1e212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", 1);
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
        $__internal_a32bbc2ac182c0be23d0f5929051b1a6058a61d8cdf85b6956c5c84f9c50228f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32bbc2ac182c0be23d0f5929051b1a6058a61d8cdf85b6956c5c84f9c50228f->enter($__internal_a32bbc2ac182c0be23d0f5929051b1a6058a61d8cdf85b6956c5c84f9c50228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $__internal_dae4668db16f94787dcf778222d2d681c0a736b1b0560e095263986e366258bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae4668db16f94787dcf778222d2d681c0a736b1b0560e095263986e366258bd->enter($__internal_dae4668db16f94787dcf778222d2d681c0a736b1b0560e095263986e366258bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32bbc2ac182c0be23d0f5929051b1a6058a61d8cdf85b6956c5c84f9c50228f->leave($__internal_a32bbc2ac182c0be23d0f5929051b1a6058a61d8cdf85b6956c5c84f9c50228f_prof);

        
        $__internal_dae4668db16f94787dcf778222d2d681c0a736b1b0560e095263986e366258bd->leave($__internal_dae4668db16f94787dcf778222d2d681c0a736b1b0560e095263986e366258bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95aa824d8404baccbd823dd200e5556f494da3062e62774bfe645c4f99a3fbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95aa824d8404baccbd823dd200e5556f494da3062e62774bfe645c4f99a3fbad->enter($__internal_95aa824d8404baccbd823dd200e5556f494da3062e62774bfe645c4f99a3fbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_104ed2428d705aa3de4f017d6c22889ebb1768ebd31f49f6f20d67483033602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104ed2428d705aa3de4f017d6c22889ebb1768ebd31f49f6f20d67483033602a->enter($__internal_104ed2428d705aa3de4f017d6c22889ebb1768ebd31f49f6f20d67483033602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_104ed2428d705aa3de4f017d6c22889ebb1768ebd31f49f6f20d67483033602a->leave($__internal_104ed2428d705aa3de4f017d6c22889ebb1768ebd31f49f6f20d67483033602a_prof);

        
        $__internal_95aa824d8404baccbd823dd200e5556f494da3062e62774bfe645c4f99a3fbad->leave($__internal_95aa824d8404baccbd823dd200e5556f494da3062e62774bfe645c4f99a3fbad_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_61510b4c9029668f177194c6ca4c23622ddf1d6fad651b3855923a785bdbd0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61510b4c9029668f177194c6ca4c23622ddf1d6fad651b3855923a785bdbd0e1->enter($__internal_61510b4c9029668f177194c6ca4c23622ddf1d6fad651b3855923a785bdbd0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7625d3a4401a276e0987ac48a254bcad09ea9a115916bd0e369319889aa58004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7625d3a4401a276e0987ac48a254bcad09ea9a115916bd0e369319889aa58004->enter($__internal_7625d3a4401a276e0987ac48a254bcad09ea9a115916bd0e369319889aa58004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_7625d3a4401a276e0987ac48a254bcad09ea9a115916bd0e369319889aa58004->leave($__internal_7625d3a4401a276e0987ac48a254bcad09ea9a115916bd0e369319889aa58004_prof);

        
        $__internal_61510b4c9029668f177194c6ca4c23622ddf1d6fad651b3855923a785bdbd0e1->leave($__internal_61510b4c9029668f177194c6ca4c23622ddf1d6fad651b3855923a785bdbd0e1_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_51f3115074ebd1f9a8560bfc41669141841b1d1731ba3f47c0deac10842a9f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f3115074ebd1f9a8560bfc41669141841b1d1731ba3f47c0deac10842a9f8e->enter($__internal_51f3115074ebd1f9a8560bfc41669141841b1d1731ba3f47c0deac10842a9f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f485dcd0bca630a955c4d06c4613488f9c1888c86b490307d5928a04f84e5da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f485dcd0bca630a955c4d06c4613488f9c1888c86b490307d5928a04f84e5da0->enter($__internal_f485dcd0bca630a955c4d06c4613488f9c1888c86b490307d5928a04f84e5da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_f485dcd0bca630a955c4d06c4613488f9c1888c86b490307d5928a04f84e5da0->leave($__internal_f485dcd0bca630a955c4d06c4613488f9c1888c86b490307d5928a04f84e5da0_prof);

        
        $__internal_51f3115074ebd1f9a8560bfc41669141841b1d1731ba3f47c0deac10842a9f8e->leave($__internal_51f3115074ebd1f9a8560bfc41669141841b1d1731ba3f47c0deac10842a9f8e_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig";
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

{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMAIL.html.twig");
    }
}
