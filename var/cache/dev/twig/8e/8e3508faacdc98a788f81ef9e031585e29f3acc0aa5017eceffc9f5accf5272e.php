<?php

/* ESFEspaceAbonneBundle:Default:mesparametresMAIL.html.twig */
class __TwigTemplate_789c82de2b025655928a42ad3f23f6d9ecd875f43b183aafbdd55ac0fad6c654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesparametresMAIL.html.twig", 1);
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
        $__internal_6a810ddcb14d1bd72649c8a95e0058fa65dac66cb8ad237fa690030e3f95c485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a810ddcb14d1bd72649c8a95e0058fa65dac66cb8ad237fa690030e3f95c485->enter($__internal_6a810ddcb14d1bd72649c8a95e0058fa65dac66cb8ad237fa690030e3f95c485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesparametresMAIL.html.twig"));

        $__internal_95b7bbfbd49960fd429a32c256fdfc2fd05637056e36b26d64e8c4a5c237e7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b7bbfbd49960fd429a32c256fdfc2fd05637056e36b26d64e8c4a5c237e7fa->enter($__internal_95b7bbfbd49960fd429a32c256fdfc2fd05637056e36b26d64e8c4a5c237e7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesparametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a810ddcb14d1bd72649c8a95e0058fa65dac66cb8ad237fa690030e3f95c485->leave($__internal_6a810ddcb14d1bd72649c8a95e0058fa65dac66cb8ad237fa690030e3f95c485_prof);

        
        $__internal_95b7bbfbd49960fd429a32c256fdfc2fd05637056e36b26d64e8c4a5c237e7fa->leave($__internal_95b7bbfbd49960fd429a32c256fdfc2fd05637056e36b26d64e8c4a5c237e7fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_448ad6bfdbd22d15665db2e3868457d878f402ef3d363eea61e68d4a98256709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448ad6bfdbd22d15665db2e3868457d878f402ef3d363eea61e68d4a98256709->enter($__internal_448ad6bfdbd22d15665db2e3868457d878f402ef3d363eea61e68d4a98256709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5065ad853b99302b92d1144351603db14a5badf59c45c5dc2a246b7421844adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5065ad853b99302b92d1144351603db14a5badf59c45c5dc2a246b7421844adf->enter($__internal_5065ad853b99302b92d1144351603db14a5badf59c45c5dc2a246b7421844adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5065ad853b99302b92d1144351603db14a5badf59c45c5dc2a246b7421844adf->leave($__internal_5065ad853b99302b92d1144351603db14a5badf59c45c5dc2a246b7421844adf_prof);

        
        $__internal_448ad6bfdbd22d15665db2e3868457d878f402ef3d363eea61e68d4a98256709->leave($__internal_448ad6bfdbd22d15665db2e3868457d878f402ef3d363eea61e68d4a98256709_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9a9da80f37d620922b2f9ebee53117e7b9c25325ca7e0a2f596517eeab2f914f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9da80f37d620922b2f9ebee53117e7b9c25325ca7e0a2f596517eeab2f914f->enter($__internal_9a9da80f37d620922b2f9ebee53117e7b9c25325ca7e0a2f596517eeab2f914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4bb64e8ee67cc50e72bb17a9131d124e731a6ca1aa7f8d031d3a0c501668d64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb64e8ee67cc50e72bb17a9131d124e731a6ca1aa7f8d031d3a0c501668d64f->enter($__internal_4bb64e8ee67cc50e72bb17a9131d124e731a6ca1aa7f8d031d3a0c501668d64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_4bb64e8ee67cc50e72bb17a9131d124e731a6ca1aa7f8d031d3a0c501668d64f->leave($__internal_4bb64e8ee67cc50e72bb17a9131d124e731a6ca1aa7f8d031d3a0c501668d64f_prof);

        
        $__internal_9a9da80f37d620922b2f9ebee53117e7b9c25325ca7e0a2f596517eeab2f914f->leave($__internal_9a9da80f37d620922b2f9ebee53117e7b9c25325ca7e0a2f596517eeab2f914f_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_df4d91864f189b6ff2457bbbbecb2b63fdd0483dddf86d343b53e163289816ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4d91864f189b6ff2457bbbbecb2b63fdd0483dddf86d343b53e163289816ee->enter($__internal_df4d91864f189b6ff2457bbbbecb2b63fdd0483dddf86d343b53e163289816ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4ec3aa729420dd21f767321e4ee62a3d68a145700712f050374c180796502275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec3aa729420dd21f767321e4ee62a3d68a145700712f050374c180796502275->enter($__internal_4ec3aa729420dd21f767321e4ee62a3d68a145700712f050374c180796502275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_4ec3aa729420dd21f767321e4ee62a3d68a145700712f050374c180796502275->leave($__internal_4ec3aa729420dd21f767321e4ee62a3d68a145700712f050374c180796502275_prof);

        
        $__internal_df4d91864f189b6ff2457bbbbecb2b63fdd0483dddf86d343b53e163289816ee->leave($__internal_df4d91864f189b6ff2457bbbbecb2b63fdd0483dddf86d343b53e163289816ee_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesparametresMAIL.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:Default:mesparametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesparametresMAIL.html.twig");
    }
}
