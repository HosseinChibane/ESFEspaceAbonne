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
        $__internal_cd3bc22bf072454c44ffec17980eec6a3480793992f2d14db90d892737799b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3bc22bf072454c44ffec17980eec6a3480793992f2d14db90d892737799b71->enter($__internal_cd3bc22bf072454c44ffec17980eec6a3480793992f2d14db90d892737799b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $__internal_687e83001718aa9fd973deeb7fe78a354e2abf0a7fa4466562b16f8ed3efbaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687e83001718aa9fd973deeb7fe78a354e2abf0a7fa4466562b16f8ed3efbaa7->enter($__internal_687e83001718aa9fd973deeb7fe78a354e2abf0a7fa4466562b16f8ed3efbaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3bc22bf072454c44ffec17980eec6a3480793992f2d14db90d892737799b71->leave($__internal_cd3bc22bf072454c44ffec17980eec6a3480793992f2d14db90d892737799b71_prof);

        
        $__internal_687e83001718aa9fd973deeb7fe78a354e2abf0a7fa4466562b16f8ed3efbaa7->leave($__internal_687e83001718aa9fd973deeb7fe78a354e2abf0a7fa4466562b16f8ed3efbaa7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_105b5710d4b85a44ccd8dd44759576183bf0688979825acc0147dc2b441e502a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105b5710d4b85a44ccd8dd44759576183bf0688979825acc0147dc2b441e502a->enter($__internal_105b5710d4b85a44ccd8dd44759576183bf0688979825acc0147dc2b441e502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a262fb5acdbccc344edfaddb07ffb2e399b608d124b179fd38d25aae00219b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a262fb5acdbccc344edfaddb07ffb2e399b608d124b179fd38d25aae00219b7->enter($__internal_4a262fb5acdbccc344edfaddb07ffb2e399b608d124b179fd38d25aae00219b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4a262fb5acdbccc344edfaddb07ffb2e399b608d124b179fd38d25aae00219b7->leave($__internal_4a262fb5acdbccc344edfaddb07ffb2e399b608d124b179fd38d25aae00219b7_prof);

        
        $__internal_105b5710d4b85a44ccd8dd44759576183bf0688979825acc0147dc2b441e502a->leave($__internal_105b5710d4b85a44ccd8dd44759576183bf0688979825acc0147dc2b441e502a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1798e6154126a6449885db181f47d1181b4b0c803fc79869d02d290f4f45e091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1798e6154126a6449885db181f47d1181b4b0c803fc79869d02d290f4f45e091->enter($__internal_1798e6154126a6449885db181f47d1181b4b0c803fc79869d02d290f4f45e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_95b03983e1dc391c50ab1c2c5c58c4bd88bd4e0d095e66a37586af421902469c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b03983e1dc391c50ab1c2c5c58c4bd88bd4e0d095e66a37586af421902469c->enter($__internal_95b03983e1dc391c50ab1c2c5c58c4bd88bd4e0d095e66a37586af421902469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_95b03983e1dc391c50ab1c2c5c58c4bd88bd4e0d095e66a37586af421902469c->leave($__internal_95b03983e1dc391c50ab1c2c5c58c4bd88bd4e0d095e66a37586af421902469c_prof);

        
        $__internal_1798e6154126a6449885db181f47d1181b4b0c803fc79869d02d290f4f45e091->leave($__internal_1798e6154126a6449885db181f47d1181b4b0c803fc79869d02d290f4f45e091_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9904f0c951400debd047d1d7aa4cc258494d481d3782c694f8a9dc58e68e81de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9904f0c951400debd047d1d7aa4cc258494d481d3782c694f8a9dc58e68e81de->enter($__internal_9904f0c951400debd047d1d7aa4cc258494d481d3782c694f8a9dc58e68e81de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b1456f58eb307bf906156091b3267fde33ab27ec844a6e913ea4f9d4fa4fa916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1456f58eb307bf906156091b3267fde33ab27ec844a6e913ea4f9d4fa4fa916->enter($__internal_b1456f58eb307bf906156091b3267fde33ab27ec844a6e913ea4f9d4fa4fa916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b1456f58eb307bf906156091b3267fde33ab27ec844a6e913ea4f9d4fa4fa916->leave($__internal_b1456f58eb307bf906156091b3267fde33ab27ec844a6e913ea4f9d4fa4fa916_prof);

        
        $__internal_9904f0c951400debd047d1d7aa4cc258494d481d3782c694f8a9dc58e68e81de->leave($__internal_9904f0c951400debd047d1d7aa4cc258494d481d3782c694f8a9dc58e68e81de_prof);

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
