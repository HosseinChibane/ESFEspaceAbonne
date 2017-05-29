<?php

/* ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig */
class __TwigTemplate_a33b557f99e04d4f51abab474f194c22095f8e7d603706f9326970324e327346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig", 1);
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
        $__internal_95af2d01ac1bb9339ea13e4975c45ae8a84d790308d80333e0faa6ed526eae5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95af2d01ac1bb9339ea13e4975c45ae8a84d790308d80333e0faa6ed526eae5a->enter($__internal_95af2d01ac1bb9339ea13e4975c45ae8a84d790308d80333e0faa6ed526eae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig"));

        $__internal_e0a1b741b12df2d9599138ffc2e2c343a4a32d42230f1476f12f2345c07eeb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a1b741b12df2d9599138ffc2e2c343a4a32d42230f1476f12f2345c07eeb5f->enter($__internal_e0a1b741b12df2d9599138ffc2e2c343a4a32d42230f1476f12f2345c07eeb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95af2d01ac1bb9339ea13e4975c45ae8a84d790308d80333e0faa6ed526eae5a->leave($__internal_95af2d01ac1bb9339ea13e4975c45ae8a84d790308d80333e0faa6ed526eae5a_prof);

        
        $__internal_e0a1b741b12df2d9599138ffc2e2c343a4a32d42230f1476f12f2345c07eeb5f->leave($__internal_e0a1b741b12df2d9599138ffc2e2c343a4a32d42230f1476f12f2345c07eeb5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_825b554619c1227257f85f561f5f787d95e0dd62f5a7a2982a2eb243f2706df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825b554619c1227257f85f561f5f787d95e0dd62f5a7a2982a2eb243f2706df3->enter($__internal_825b554619c1227257f85f561f5f787d95e0dd62f5a7a2982a2eb243f2706df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30f70f01df78ed3a2c464eea18615878a86ff922b6daf6e12c9a7db1c0da7d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f70f01df78ed3a2c464eea18615878a86ff922b6daf6e12c9a7db1c0da7d80->enter($__internal_30f70f01df78ed3a2c464eea18615878a86ff922b6daf6e12c9a7db1c0da7d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30f70f01df78ed3a2c464eea18615878a86ff922b6daf6e12c9a7db1c0da7d80->leave($__internal_30f70f01df78ed3a2c464eea18615878a86ff922b6daf6e12c9a7db1c0da7d80_prof);

        
        $__internal_825b554619c1227257f85f561f5f787d95e0dd62f5a7a2982a2eb243f2706df3->leave($__internal_825b554619c1227257f85f561f5f787d95e0dd62f5a7a2982a2eb243f2706df3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_56d2332c04b8f55001662829c5698f6878caab852a5fe085c28ef25e180c8b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d2332c04b8f55001662829c5698f6878caab852a5fe085c28ef25e180c8b62->enter($__internal_56d2332c04b8f55001662829c5698f6878caab852a5fe085c28ef25e180c8b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_32894d8eafdce2686903c3dbdd63db5333af690c99e7c4740413fdc54655ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32894d8eafdce2686903c3dbdd63db5333af690c99e7c4740413fdc54655ea05->enter($__internal_32894d8eafdce2686903c3dbdd63db5333af690c99e7c4740413fdc54655ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_32894d8eafdce2686903c3dbdd63db5333af690c99e7c4740413fdc54655ea05->leave($__internal_32894d8eafdce2686903c3dbdd63db5333af690c99e7c4740413fdc54655ea05_prof);

        
        $__internal_56d2332c04b8f55001662829c5698f6878caab852a5fe085c28ef25e180c8b62->leave($__internal_56d2332c04b8f55001662829c5698f6878caab852a5fe085c28ef25e180c8b62_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_7ed9d96ddc64d46a8519fa7c569a2c74b2575c09e2462c8f623a5ab21a812608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed9d96ddc64d46a8519fa7c569a2c74b2575c09e2462c8f623a5ab21a812608->enter($__internal_7ed9d96ddc64d46a8519fa7c569a2c74b2575c09e2462c8f623a5ab21a812608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_bc6616d24809c5eaff7719bebe8bc99c760077da1004d0bb5c19a0bf2b23bd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6616d24809c5eaff7719bebe8bc99c760077da1004d0bb5c19a0bf2b23bd71->enter($__internal_bc6616d24809c5eaff7719bebe8bc99c760077da1004d0bb5c19a0bf2b23bd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_bc6616d24809c5eaff7719bebe8bc99c760077da1004d0bb5c19a0bf2b23bd71->leave($__internal_bc6616d24809c5eaff7719bebe8bc99c760077da1004d0bb5c19a0bf2b23bd71_prof);

        
        $__internal_7ed9d96ddc64d46a8519fa7c569a2c74b2575c09e2462c8f623a5ab21a812608->leave($__internal_7ed9d96ddc64d46a8519fa7c569a2c74b2575c09e2462c8f623a5ab21a812608_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mesparametresMAIL.html.twig");
    }
}
