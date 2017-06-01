<?php

/* ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig */
class __TwigTemplate_9876ce046ae005dd6703e8df7c0f454924ff8431596c9a3ea530303e5ca2f475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig", 1);
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
        $__internal_28a7fe9197de50c6bd32073cd7fb6d3e081736a384653cb960ee94136466ec33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a7fe9197de50c6bd32073cd7fb6d3e081736a384653cb960ee94136466ec33->enter($__internal_28a7fe9197de50c6bd32073cd7fb6d3e081736a384653cb960ee94136466ec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $__internal_d21f40afbac1ae3f5557233fd743c72a40aade4dbc58c5e9fb1696499f502aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21f40afbac1ae3f5557233fd743c72a40aade4dbc58c5e9fb1696499f502aa1->enter($__internal_d21f40afbac1ae3f5557233fd743c72a40aade4dbc58c5e9fb1696499f502aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28a7fe9197de50c6bd32073cd7fb6d3e081736a384653cb960ee94136466ec33->leave($__internal_28a7fe9197de50c6bd32073cd7fb6d3e081736a384653cb960ee94136466ec33_prof);

        
        $__internal_d21f40afbac1ae3f5557233fd743c72a40aade4dbc58c5e9fb1696499f502aa1->leave($__internal_d21f40afbac1ae3f5557233fd743c72a40aade4dbc58c5e9fb1696499f502aa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05832f874833aafbe38ddada3b0b476b0f23713caa04fe37eabb0e250b549207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05832f874833aafbe38ddada3b0b476b0f23713caa04fe37eabb0e250b549207->enter($__internal_05832f874833aafbe38ddada3b0b476b0f23713caa04fe37eabb0e250b549207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_021235379d9e8776c76d56666e051f708e176272a9d3ddfe4d5ded184b0da9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021235379d9e8776c76d56666e051f708e176272a9d3ddfe4d5ded184b0da9ff->enter($__internal_021235379d9e8776c76d56666e051f708e176272a9d3ddfe4d5ded184b0da9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_021235379d9e8776c76d56666e051f708e176272a9d3ddfe4d5ded184b0da9ff->leave($__internal_021235379d9e8776c76d56666e051f708e176272a9d3ddfe4d5ded184b0da9ff_prof);

        
        $__internal_05832f874833aafbe38ddada3b0b476b0f23713caa04fe37eabb0e250b549207->leave($__internal_05832f874833aafbe38ddada3b0b476b0f23713caa04fe37eabb0e250b549207_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2ca681eb6042c3b532a993bbcc692e3101a5d4277fb8a612c976727b4cab1e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca681eb6042c3b532a993bbcc692e3101a5d4277fb8a612c976727b4cab1e12->enter($__internal_2ca681eb6042c3b532a993bbcc692e3101a5d4277fb8a612c976727b4cab1e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_618e84b5f00662475990312999fd1a518fec62bb73ac54e6b0d7d24658c44e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618e84b5f00662475990312999fd1a518fec62bb73ac54e6b0d7d24658c44e5f->enter($__internal_618e84b5f00662475990312999fd1a518fec62bb73ac54e6b0d7d24658c44e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_618e84b5f00662475990312999fd1a518fec62bb73ac54e6b0d7d24658c44e5f->leave($__internal_618e84b5f00662475990312999fd1a518fec62bb73ac54e6b0d7d24658c44e5f_prof);

        
        $__internal_2ca681eb6042c3b532a993bbcc692e3101a5d4277fb8a612c976727b4cab1e12->leave($__internal_2ca681eb6042c3b532a993bbcc692e3101a5d4277fb8a612c976727b4cab1e12_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bba1195a81e8c19a0951fd4bd6c87c2d05982e663a6fcd9752f60f3c9e452aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba1195a81e8c19a0951fd4bd6c87c2d05982e663a6fcd9752f60f3c9e452aec->enter($__internal_bba1195a81e8c19a0951fd4bd6c87c2d05982e663a6fcd9752f60f3c9e452aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_241d98ce31b28791e8af3fed8147739129d2733bebfabac5dd3b1c0283b91677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241d98ce31b28791e8af3fed8147739129d2733bebfabac5dd3b1c0283b91677->enter($__internal_241d98ce31b28791e8af3fed8147739129d2733bebfabac5dd3b1c0283b91677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_241d98ce31b28791e8af3fed8147739129d2733bebfabac5dd3b1c0283b91677->leave($__internal_241d98ce31b28791e8af3fed8147739129d2733bebfabac5dd3b1c0283b91677_prof);

        
        $__internal_bba1195a81e8c19a0951fd4bd6c87c2d05982e663a6fcd9752f60f3c9e452aec->leave($__internal_bba1195a81e8c19a0951fd4bd6c87c2d05982e663a6fcd9752f60f3c9e452aec_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametresMAIL.html.twig");
    }
}
